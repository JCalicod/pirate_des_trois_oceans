<?php

namespace App\Repository;

use App\Entity\AllianceMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AllianceMember|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllianceMember|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllianceMember[]    findAll()
 * @method AllianceMember[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllianceMemberRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllianceMember::class);
    }

    // /**
    //  * @return AllianceMember[] Returns an array of AllianceMember objects
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
    public function findOneBySomeField($value): ?AllianceMember
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
