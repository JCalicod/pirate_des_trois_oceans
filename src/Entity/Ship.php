<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShipRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"ship" = "Ship", "den" = "Den"})
 */
class Ship
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $level = 1;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $avatar = "repaire";

    /**
     * @ORM\Column(type="bigint")
     */
    private $xp = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $structure = 100;

    /**
     * @ORM\Column(type="integer")
     */
    private $moral = 100;

    /**
     * @ORM\Column(type="integer")
     */
    private $seaman = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $explorer = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $gunner = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $cook = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $carpenter = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $surgeon = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $gun = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $arsenal = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $food = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $alcohol = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $wood = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $copper = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $gemstone = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $jewellery = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $stuff = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $fur = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $manuscript = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $spice = 0;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="ships")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lands", inversedBy="ships")
     * @ORM\JoinColumn(nullable=false)
     */
    private $position;

    /**
     * @ORM\Column(type="integer")
     */
    private $display_order;

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

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getXp(): ?string
    {
        return $this->xp;
    }

    public function setXp(string $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function getMaxXp() : int {
        return 50 * pow($this->getLevel(), 2);
    }

    public function getStructure(): ?int
    {
        return $this->structure;
    }

    public function setStructure(int $structure): self
    {
        if ($structure <= 0) {
            $this->structure = 0;
        }
        else {
            $this->structure = $structure;
        }

        return $this;
    }

    public function getMoral(): ?int
    {
        return $this->moral;
    }

    public function setMoral(int $moral): self
    {
        $this->moral = $moral;

        return $this;
    }

    public function getSeaman(): ?int
    {
        return $this->seaman;
    }

    public function setSeaman(int $seaman): self
    {
        ($seaman > 0) ? ($this->seaman = $seaman) : ($this->seaman = 0);

        return $this;
    }

    public function getExplorer(): ?int
    {
        return $this->explorer;
    }

    public function setExplorer(int $explorer): self
    {
        ($explorer > 0) ? ($this->explorer = $explorer) : ($this->explorer = 0);

        return $this;
    }

    public function getGunner(): ?int
    {
        return $this->gunner;
    }

    public function setGunner(int $gunner): self
    {
        ($gunner > 0) ? ($this->gunner = $gunner) : ($this->gunner = 0);

        return $this;
    }

    public function getCook(): ?int
    {
        return $this->cook;
    }

    public function setCook(int $cook): self
    {
        ($cook > 0) ? ($this->cook = $cook) : ($this->cook = 0);

        return $this;
    }

    public function getCarpenter(): ?int
    {
        return $this->carpenter;
    }

    public function setCarpenter(int $carpenter): self
    {
        ($carpenter > 0) ? ($this->carpenter = $carpenter) : ($this->carpenter = 0);

        return $this;
    }

    public function getSurgeon(): ?int
    {
        return $this->surgeon;
    }

    public function setSurgeon(int $surgeon): self
    {
        ($surgeon > 0) ? ($this->surgeon = $surgeon) : ($this->surgeon = 0);

        return $this;
    }

    public function getGun(): ?int
    {
        return $this->gun;
    }

    public function setGun(int $gun): self
    {
        ($gun > 0) ? ($this->gun = $gun) : ($this->gun = 0);

        return $this;
    }

    public function getArsenal(): ?int
    {
        return $this->arsenal;
    }

    public function setArsenal(int $arsenal): self
    {
        ($arsenal > 0) ? ($this->arsenal = $arsenal) : ($this->arsenal = 0);

        return $this;
    }

    public function getFood(): ?int
    {
        return $this->food;
    }

    public function setFood(int $food): self
    {
        ($food > 0) ? ($this->food = $food) : ($this->food = 0);

        return $this;
    }

    public function getAlcohol(): ?int
    {
        return $this->alcohol;
    }

    public function setAlcohol(int $alcohol): self
    {
        ($alcohol > 0) ? ($this->alcohol = $alcohol) : ($this->alcohol = 0);

        return $this;
    }

    public function getWood(): ?int
    {
        return $this->wood;
    }

    public function setWood(int $wood): self
    {
        ($wood > 0) ? ($this->wood = $wood) : ($this->wood = 0);

        return $this;
    }

    public function getCopper(): ?int
    {
        return $this->copper;
    }

    public function setCopper(int $copper): self
    {
        ($copper > 0) ? ($this->copper = $copper) : ($this->copper = 0);

        return $this;
    }

    public function getGemstone(): ?int
    {
        return $this->gemstone;
    }

    public function setGemstone(int $gemstone): self
    {
        ($gemstone > 0) ? ($this->gemstone = $gemstone) : ($this->gemstone = 0);

        return $this;
    }

    public function getJewellery(): ?int
    {
        return $this->jewellery;
    }

    public function setJewellery(int $jewellery): self
    {
        ($jewellery > 0) ? ($this->jewellery = $jewellery) : ($this->jewellery = 0);

        return $this;
    }

    public function getStuff(): ?int
    {
        return $this->stuff;
    }

    public function setStuff(int $stuff): self
    {
        ($stuff > 0) ? ($this->stuff = $stuff) : ($this->stuff = 0);

        return $this;
    }

    public function getFur(): ?int
    {
        return $this->fur;
    }

    public function setFur(int $fur): self
    {
        ($fur > 0) ? ($this->fur = $fur) : ($this->fur = 0);

        return $this;
    }

    public function getManuscript(): ?int
    {
        return $this->manuscript;
    }

    public function setManuscript(int $manuscript): self
    {
        ($manuscript > 0) ? ($this->manuscript = $manuscript) : ($this->manuscript = 0);

        return $this;
    }

    public function getSpice(): ?int
    {
        return $this->spice;
    }

    public function setSpice(int $spice): self
    {
        ($spice > 0) ? ($this->spice = $spice) : ($this->spice = 0);

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

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

    public function getMerchandisesSum() : int {
        return $this->getGun() + $this->getArsenal() + $this->getFood() + $this->getAlcohol() + $this->getWood() + $this->getCopper() + $this->getGemstone() + $this->getJewellery() + $this->getStuff() + $this->getFur() + $this->getManuscript() + $this->getSpice();
    }

    public function getMaxMerchandises() : int {
        return $this->getLevel() * 1000;
    }

    public function getMaxSeaman() : int {
        return $this->getLevel() * 10;
    }

    public function getMaxExplorer() : int {
        return $this->getLevel() * 2;
    }

    public function getMaxGunner() : int {
        return $this->getLevel() * 1;
    }

    public function getMaxCook() : int {
        return ceil($this->getLevel() / 10);
    }

    public function getMaxCarpenter() : int {
        return ceil($this->getLevel() / 10);
    }

    public function getMaxSurgeon() : int {
        return ceil($this->getLevel() / 50);
    }

    public function getCrew() : int {
        return $this->getSeaman() + $this->getExplorer() + $this->getGunner() + $this->getCook() + $this->getCarpenter() + $this->getSurgeon();
    }

    public function getMaxCrew() : int {
        return $this->getMaxSeaman() + $this->getMaxExplorer() + $this->getMaxGunner() + $this->getMaxCook() + $this->getMaxCarpenter() + $this->getMaxSurgeon();
    }

    public function getXPDisp() {
        if ($this->getLevel() == 1) {
            return $this->getXp();
        }
        else {
            $xp = $this->getXp() - ((($this->getLevel() - 1) * 50) * ($this->getLevel() - 1));
            return $xp;
        }
    }

    public function getMaxXpDisp() {
        if ($this->getLevel() == 1) {
            return $this->getMaxXp();
        }
        else {
            $maxXP = $this->getMaxXp() - ((($this->getLevel() - 1) * 50) * ($this->getLevel() - 1));
            return $maxXP;
        }
    }

    public function __toString() {
        return $this->getName();
    }

    public function getDisplayOrder(): ?int
    {
        return $this->display_order;
    }

    public function setDisplayOrder(int $display_order): self
    {
        $this->display_order = $display_order;

        return $this;
    }
}
