<?php

namespace App\Repository;

use App\Entity\Tavern;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tavern|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tavern|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tavern[]    findAll()
 * @method Tavern[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TavernRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tavern::class);
    }


    /**
     * @return mixed
     */
    public function findLastMessages()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.moment_date', 'DESC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Tavern
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
