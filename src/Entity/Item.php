<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icon;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Treasure", mappedBy="item")
     */
    private $treasures;

    public function __construct()
    {
        $this->treasures = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return Collection|Treasure[]
     */
    public function getTreasures(): Collection
    {
        return $this->treasures;
    }

    public function addTreasure(Treasure $treasure): self
    {
        if (!$this->treasures->contains($treasure)) {
            $this->treasures[] = $treasure;
            $treasure->setItem($this);
        }

        return $this;
    }

    public function removeTreasure(Treasure $treasure): self
    {
        if ($this->treasures->contains($treasure)) {
            $this->treasures->removeElement($treasure);
            // set the owning side to null (unless already changed)
            if ($treasure->getItem() === $this) {
                $treasure->setItem(null);
            }
        }

        return $this;
    }
}
