<?php

namespace App\Repository;

use App\Entity\Lands;
use App\Entity\Ship;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ship|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ship|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ship[]    findAll()
 * @method Ship[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ship::class);
    }

    /**
     * @param User $owner
     * @param Lands|null $position
     * @return mixed
     */
    public function findUserShipsWithExplorers(User $owner, Lands $position = null)
    {
        $query = $this->createQueryBuilder('s')
            ->andWhere('s.owner = :owner')
            ->setParameter('owner', $owner)
            ->andWhere('s.explorer > 0');
        if ($position) {
            $query->andWhere('s.position = :position')
                ->setParameter('position', $position);
        }
        $query->getQuery()
            ->getResult()
        ;
        return $query->getQuery()->getResult();
    }
}
