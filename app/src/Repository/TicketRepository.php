<?php

namespace App\Repository;

use App\Entity\Ticket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method Ticket|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ticket|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ticket[]    findAll()
 * @method Ticket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ticket::class);
    }

    public function findTickets($page, $limit, $order, $orderBy,$user)
    {

        $query = $this->createQueryBuilder('t');
        $roles=$user->getRoles();
        $roleSupportStr = "ROLE_SUPPORT";
        $roleAdminStr = "ROLE_ADMIN";
        $roleSuperAdminStr = "ROLE_SUPER_ADMIN";
        if(!(in_array($roleSupportStr,$roles)||in_array($roleAdminStr,$roles)||in_array($roleSuperAdminStr,$roles)))
        {
            $query->where('t.user_id=:user_id')->setParameter('user_id',$user->getId());
        }
        $query->orderBy('t.'.$orderBy, $order);
        $query->setMaxResults($limit);
        $query->setFirstResult(($limit * $page) - $limit);

        return new Paginator($query);
    }
    // /**
    //  * @return Ticket[] Returns an array of Ticket objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ticket
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
