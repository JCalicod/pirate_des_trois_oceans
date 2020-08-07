<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 27/04/2020
 * Time: 01:55
 */

namespace App\Repository;


use App\Entity\Den;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DenRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Den::class);
    }
}