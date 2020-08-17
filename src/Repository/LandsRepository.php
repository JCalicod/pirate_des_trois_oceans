<?php

namespace App\Repository;

use App\Entity\Alliance;
use App\Entity\AllianceWar;
use App\Entity\Lands;
use App\Entity\User;
use App\Entity\War;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lands|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lands|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lands[]    findAll()
 * @method Lands[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LandsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lands::class);
    }

    /**
     * @return mixed
     */
    public function getLandBestAlliances(Lands $position)
    {
        $query = $this->createQueryBuilder('l')
            ->select(
                'l.id AS land_id',
                'a.abbreviation AS tag',
                'a.color AS color',
                'a.id AS alliance_id',
                'SUM(aw.points) AS points'
            )
            ->innerJoin(War::class, 'w', 'WITH', 'w.position = l')
            ->innerJoin(User::class, 'u', 'WITH', 'w.attacker = u')
            ->innerJoin(Alliance::class, 'a', 'WITH', 'u.alliance = a')
            ->innerJoin(AllianceWar::class, 'aw', 'WITH', 'aw.war = w')
            ->where('l.id = :id')
            ->setParameter('id', $position->getId())
            ->andWhere('w.win = :win')
            ->setParameter('win', true)
            ->groupBy('a.id')
            ->orderBy('points', 'DESC')
        ;

        return $query->getQuery()->getResult();
    }

}
