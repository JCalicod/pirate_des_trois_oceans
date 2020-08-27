<?php

namespace App\Repository;

use App\Entity\Item;
use App\Entity\Treasure;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Treasure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Treasure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Treasure[]    findAll()
 * @method Treasure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TreasureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Treasure::class);
    }

    /**
     * @param User $user
     * @param string $item
     * @return int|mixed|string
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function userHasItem(User $user, string $item)
    {
        return $this->createQueryBuilder('t')
            ->innerJoin(Item::class, 'i', 'WITH', 't.item = i')
            ->where('t.owner = :owner')
            ->setParameter('owner', $user)
            ->andWhere('i.name = :name')
            ->setParameter('name', $item)
            ->andWhere('t.is_active = :is_active')
            ->setParameter('is_active', true)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Treasure
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
