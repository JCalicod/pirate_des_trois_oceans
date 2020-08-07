<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WarRepository")
 */
class War
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $sunk;

    /**
     * @ORM\Column(type="integer")
     */
    private $captured;

    /**
     * @ORM\Column(type="datetime")
     */
    private $battle_date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="attacks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $attacker;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="defenses")
     * @ORM\JoinColumn(nullable=true)
     */
    private $defender;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lands", inversedBy="wars")
     * @ORM\JoinColumn(nullable=false)
     */
    private $position;

    /**
     * @ORM\Column(type="boolean")
     */
    private $win = false;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AllianceWar", mappedBy="war", cascade={"persist", "remove"})
     */
    private $allianceWar;

    public function __construct()
    {
        $this->setBattleDate(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSunk(): ?int
    {
        return $this->sunk;
    }

    public function setSunk(int $sunk): self
    {
        $this->sunk = $sunk;

        return $this;
    }

    public function getCaptured(): ?int
    {
        return $this->captured;
    }

    public function setCaptured(int $captured): self
    {
        $this->captured = $captured;

        return $this;
    }

    public function getBattleDate(): ?\DateTimeInterface
    {
        return $this->battle_date;
    }

    public function setBattleDate(\DateTimeInterface $battle_date): self
    {
        $this->battle_date = $battle_date;

        return $this;
    }

    public function getAttacker(): ?User
    {
        return $this->attacker;
    }

    public function setAttacker(?User $attacker): self
    {
        $this->attacker = $attacker;

        return $this;
    }

    public function getDefender(): ?User
    {
        return $this->defender;
    }

    public function setDefender(?User $defender): self
    {
        $this->defender = $defender;

        return $this;
    }

    public function getPosition(): ?Lands
    {
        return $this->position;
    }

    public function setPosition(?Lands $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getWin(): ?bool
    {
        return $this->win;
    }

    public function setWin(bool $win): self
    {
        $this->win = $win;

        return $this;
    }

    public function getAllianceWar(): ?AllianceWar
    {
        return $this->allianceWar;
    }

    public function setAllianceWar(AllianceWar $allianceWar): self
    {
        $this->allianceWar = $allianceWar;

        // set the owning side of the relation if necessary
        if ($allianceWar->getWar() !== $this) {
            $allianceWar->setWar($this);
        }

        return $this;
    }
}
