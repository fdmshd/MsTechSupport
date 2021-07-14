<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\TicketRepository;
use App\Service\NormalizeService;
use App\Entity\Ticket;
use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class TicketController extends AbstractController
{
    /**
     * @Route("/tickets", name="tickets",methods = {"GET"})
     */
    public function getTickets(Request $request, TicketRepository $ticketRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $order = $request->query->get('order', 'DESC');
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 10);
        $orderBy = $request->query->get('orderBy', 'date');
        if (!in_array($order, ['ASC', 'DESC'], true)) {
            return $this->json(['Incorrect order. Only ASC or DESC are allowed.'], 400);
        }
        $tickets = $ticketRepository->findTickets($page, $limit, $order, $orderBy);
        $data = (new NormalizeService())->normalizeByGroup($tickets);

        return new Response($this->json($data), 200);
    }

    /**
     * @Route("/tickets/{id}", name="show_ticket",requirements={"id"="\d+"},methods={"GET"})
     */
    public function showTicket($id): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $ticket = $this->getDoctrine()
            ->getRepository(Ticket::class)
            ->find($id);
        $data = (new NormalizeService())->normalizeByGroup($ticket);
        return new Response($this->json($data), 200);
    }

    /**
     * @Route("/tickets", name="create_ticket", methods={"POST"})
     */
    public function createTicket(ValidatorInterface $validator, Request $request): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        //$user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $ticket = new ticket();
        $ticket->setDescription($request->request->get('description'));
        $ticket->setDate(new DateTime());
        $ticket->setSubject($request->request->get('subject'));
        $ticket->setFile($request->request->get('file'));
        //$ticket->setUserid($user->getId());
        //$ticket->setUserName($user->getUsername());
        $category_name = $request->request->get('category');
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(array('name' => $category_name));
        //todo вывести ошибку если не найдено
        $ticket->setCategory($category);

        $errors = $validator->validate($ticket);
        if (count($errors) > 0) {
            return new Response((string)$errors, 400);
        } else {
            $entityManager->persist($ticket);
            $entityManager->flush();
            return new Response($this->json($ticket), 201);
        }

    }

    /**
     * @Route("/tickets/{id}", name="update_ticket",requirements={"id"="\d+"},methods={"PUT"})
     */
    public function updateTicket($id, ValidatorInterface $validator, Request $request): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $entityManager = $this->getDoctrine()->getManager();
        $request_data = json_decode($request->getContent());
        $ticket = $this->getDoctrine()
            ->getRepository(Ticket::class)
            ->find($id);
        $ticket->setDescription($request_data->description);
        $ticket->setSubject($request_data->subject);
        $ticket->setFile($request_data->file);
        $category=$this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy($request_data->category);
        $ticket->setCategory($category);
        $errors = $validator->validate($ticket);
        if (count($errors) > 0) {
            return new Response($this->json(['errors' => $errors]), 400);
        } else {
            $entityManager->flush();
            return new Response($this->json($ticket), 200);
        }
    }

    /**
     * @Route("/tickets/{id}", name="delete_ticket",requirements={"id"="\d+"},methods={"DELETE"})
     */
    public function deleteTicket($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $ticket = $this->getDoctrine()
            ->getRepository(Ticket::class)
            ->find($id);
        if ($ticket) {
            $entityManager->remove($ticket);
            $entityManager->flush();
        }
    }

}
