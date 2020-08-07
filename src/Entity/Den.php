<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 27/04/2020
 * Time: 01:53
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DenRepository")
 */
class Den extends Ship {
    public function getMaxMerchandises() : int {
        return $this->getLevel() * 2000;
    }
}