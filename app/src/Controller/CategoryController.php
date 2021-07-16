<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Entity\User;
use App\Entity\Category;
use App\Service\NormalizeService;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/categories", name="categories", methods = {"GET"})
     * @IsGranted("ROLE_SUPPORT")
     */
    public function getCategories(CategoryRepository $categoryRepository, Request $request): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $order = $request->query->get('order', 'DESC');
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 10);
        if (!in_array($order, ['ASC', 'DESC'], true)) {
            return $this->json(['Incorrect order. Only ASC or DESC are allowed.'], 400);
        }
        $categories = $categoryRepository->findCategories($page, $limit, $order);

        return new Response($this->json($categories), 200);
    }

    /**
     * @Route("/categories/{id}", name="get_category",requirements={"id"="\d+"},methods={"GET"})
     * @IsGranted("ROLE_SUPPORT")
     */
    public function getCategory($id): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($id);
        return new Response($this->json($category), 200);
    }

    /**
     * @Route("/categories", name="create_category",requirements={"id"="\d+"},methods={"POST"})
     * @IsGranted("ROLE_SUPPORT")
     */
    public function createCategory(ValidatorInterface $validator,Request $request):Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $entityManager = $this->getDoctrine()->getManager();
        $category = new Category();
        $category->setName($request->request->get('name'));
        $errors = $validator->validate($category);
        if (count($errors) > 0) {
            return new Response((string)$errors, 400);
        } else {
            $entityManager->persist($category);
            $entityManager->flush();
            return new Response($this->json($category), 201);
        }
    }
    /**
     * @Route("/categories/{id}", name="update_category",requirements={"id"="\d+"},methods={"PUT"})
     * @IsGranted("ROLE_SUPPORT")
     */
    public function updateCategory(Request $request, ValidatorInterface $validator,$id):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($id);
        $decoded_request = json_decode($request->getContent());
        $category->setName($decoded_request->name);
        $errors = $validator->validate($category);
        if (count($errors) > 0) {
            return new Response($this->json(['errors' => $errors]), 400);
        } else {
            $entityManager->flush();
            return new Response($this->json($category), 200);
        }
    }
    /**
     * @Route("/categories/{id}", name="delete_category",requirements={"id"="\d+"},methods={"DELETE"})
     * @IsGranted("ROLE_SUPPORT")
     */
    public function deleteCategory(Request $request,$id):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($id);
        if ($category) {
            $entityManager->remove($category);
            $entityManager->flush();
        }
        return new Response($this->json(['message' => 'Category successfully removed']), 200);
    }


}
