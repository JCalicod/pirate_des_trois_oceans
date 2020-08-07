<?php

namespace App\Repository;

use App\Entity\AllianceWar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AllianceWar|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllianceWar|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllianceWar[]    findAll()
 * @method AllianceWar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllianceWarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllianceWar::class);
    }

    // /**
    //  * @return AllianceWar[] Returns an array of AllianceWar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AllianceWar
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
