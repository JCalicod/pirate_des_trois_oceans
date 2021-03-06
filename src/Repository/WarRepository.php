<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\War;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method War|null find($id, $lockMode = null, $lockVersion = null)
 * @method War|null findOneBy(array $criteria, array $orderBy = null)
 * @method War[]    findAll()
 * @method War[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WarRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, War::class);
        $this->em = $em;
    }

    /**
     * @param User $defender
     * @return mixed
     * @throws \Exception
     */
    public function lastAttacks(User $defender)
    {
        date_default_timezone_set('Europe/Paris');
        $today_startdatetime = \DateTime::createFromFormat( "Y-m-d H:i:s", date("Y-m-d 00:00:00"), New \DateTimeZone('Europe/Paris') );
        $today_enddatetime = \DateTime::createFromFormat( "Y-m-d H:i:s", date("Y-m-d 23:59:59"), New \DateTimeZone('Europe/Paris') );

        $query = $this->createQueryBuilder('w')
            ->andWhere('w.defender = :defender')
            ->setParameter('defender', $defender)
            ->andWhere('w.battle_date >= :today_start')
            ->setParameter('today_start', $today_startdatetime)
            ->andWhere('w.battle_date <= :today_end')
            ->setParameter('today_end', $today_enddatetime)
            ->getQuery()
        ;

        return $query->getResult();
    }

    /**
     * @return array
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getRecentStats(): array
    {
        $stats = [];
        $today_startdatetime = \DateTime::createFromFormat( "Y-m-d H:i:s", date("Y-m-d 00:00:00") );
        $today_enddatetime = \DateTime::createFromFormat( "Y-m-d H:i:s", date("Y-m-d 23:59:59") );

        $query = $this->createQueryBuilder('w')
            ->select('COUNT(w.id) AS battles, SUM(w.sunk) AS sunk, SUM(w.captured) AS captured')
            ->andWhere('w.battle_date >= :today_start')
            ->setParameter('today_start', $today_startdatetime)
            ->andWhere('w.battle_date <= :today_end')
            ->setParameter('today_end', $today_enddatetime)
            ->getQuery()
        ;

        $today = $query->getSingleResult();

        $stats['today'] = $today;

        $yesterday = [];
        $yesterday_startdatetime = $today_startdatetime->modify('-1 day');
        $yesterday_enddatetime = $today_enddatetime->modify('-1 day');

        $query2 = $this->createQueryBuilder('w')
            ->select('COUNT(w.id) AS battles, SUM(w.sunk) AS sunk, SUM(w.captured) AS captured')
            ->andWhere('w.battle_date >= :yesterday_start')
            ->setParameter('yesterday_start', $yesterday_startdatetime)
            ->andWhere('w.battle_date <= :yesterday_end')
            ->setParameter('yesterday_end', $yesterday_enddatetime)
            ->getQuery()
        ;

        $yesterday = $query2->getSingleResult();

        $stats['yesterday'] = $yesterday;

        return $stats;
    }


    /*
    public function findOneBySomeField($value): ?War
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
