<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LandsRepository")
 */
class Lands
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $percentage;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $x;

    /**
     * @ORM\Column(type="integer")
     */
    private $y;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ship", mappedBy="position")
     */
    private $ships;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\War", mappedBy="position")
     */
    private $wars;

    public function __construct()
    {
        $this->ships = new ArrayCollection();
        $this->wars = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPercentage(): ?int
    {
        return $this->percentage;
    }

    public function setPercentage(int $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }

    /**
     * @return Collection|Ship[]
     */
    public function getShips(): Collection
    {
        return $this->ships;
    }

    public function addShip(Ship $ship): self
    {
        if (!$this->ships->contains($ship)) {
            $this->ships[] = $ship;
            $ship->setPosition($this);
        }

        return $this;
    }

    public function removeShip(Ship $ship): self
    {
        if ($this->ships->contains($ship)) {
            $this->ships->removeElement($ship);
            // set the owning side to null (unless already changed)
            if ($ship->getPosition() === $this) {
                $ship->setPosition(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|War[]
     */
    public function getWars(): Collection
    {
        return $this->wars;
    }

    public function addWar(War $war): self
    {
        if (!$this->wars->contains($war)) {
            $this->wars[] = $war;
            $war->setPosition($this);
        }

        return $this;
    }

    public function removeWar(War $war): self
    {
        if ($this->wars->contains($war)) {
            $this->wars->removeElement($war);
            // set the owning side to null (unless already changed)
            if ($war->getPosition() === $this) {
                $war->setPosition(null);
            }
        }

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getId() . ' - ' . $this->getName();
    }
}
