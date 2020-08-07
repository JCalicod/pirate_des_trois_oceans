<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @UniqueEntity("abbreviation")
 * @ORM\Entity(repositoryClass="App\Repository\AllianceRepository")
 */
class Alliance
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\Length(
     *     min = 4,
     *     max = 30,
     *     minMessage = "Le nom doit comporter au moins 4 caractères.",
     *     maxMessage = "Le nom doit comporter au maximum 30 caractères.",
     *     allowEmptyString = false
     * )
     * @Assert\Regex(
     *     pattern = "/^[a-zA-Zàéèâêô ]+$/i",
     *     htmlPattern = "^[a-zA-Zàéèâêô ]+$",
     *     message="Le nom ne doit contenir que des caractères alphabétiques et des espaces."
     * )
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @Assert\Length(
     *     min = 4,
     *     max = 4,
     *     minMessage = "L'abréviation doit comporter 4 caractères.",
     *     maxMessage = "L'abréviation doit comporter 4 caractères.",
     *     allowEmptyString = false
     * )
     * @Assert\Type(type="alpha")
     * @ORM\Column(type="string", length=4)
     */
    private $abbreviation;

    /**
     * @Assert\Choice(callback="getColors")
     * @ORM\Column(type="string", length=20)
     */
    private $color;

    /**
     * @ORM\Column(type="date")
     */
    private $creation;

    /**
     * @ORM\Column(type="integer")
     */
    private $chest = 0;

    /**
     * @ORM\Column(type="boolean")
     */
    private $open = true;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="alliance")
     */
    private $users;

    /**
     * @Assert\Length(
     *     min = 10,
     *     max = 1500,
     *     minMessage = "La description doit comporter au moins 10 caractères.",
     *     maxMessage = "La description doit comporter au maximum 1 500 caractères.",
     *     allowEmptyString = false
     * )
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AllianceMember", mappedBy="alliance")
     */
    private $allianceMembers;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pirate_code;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AllianceHistory", mappedBy="alliance")
     */
    private $allianceHistories;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $advert;

    /**
     * @ORM\Column(type="integer")
     */
    private $required_power = 0;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AllianceWar", mappedBy="alliance")
     */
    private $allianceWars;

    public function __construct() {
        $this->setCreation(new \DateTime('now', New \DateTimeZone('Europe/Paris')));
        $this->users = new ArrayCollection();
        $this->allianceMembers = new ArrayCollection();
        $this->allianceHistories = new ArrayCollection();
        $this->allianceWars = new ArrayCollection();
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

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(string $abbreviation): self
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return array
     */
    public static function getColors(): array
    {
        return [
            'green',
            'purple',
            'red',
            'blue',
            'black',
            'yellow',
            'orange'
        ];
    }

    /**
     * @return bool
     */
    public function isFull(): bool
    {
        if (count($this->users) == 10) {
            return true;
        }
        return false;
    }

    /**
     * @return User|null
     */
    public function getLeader(): ?User
    {
        foreach ($this->getAllianceMembers() as $member) {
            if ($member->getRole() == 'ADMIN') {
                return $member->getUser();
            }
        }
        return null;
    }

    /**
     * @return AllianceMember|null
     */
    public function getLeaderMember(): ?AllianceMember
    {
        foreach ($this->getAllianceMembers() as $member) {
            if ($member->getRole() == 'ADMIN') {
                return $member;
            }
        }
        return null;
    }

    /**
     * @param User $new
     */
    public function updateLeader(User $new)
    {
        $members = $this->getAllianceMembers();
        $old = $this->getLeaderMember();
        $old->setRole('USER');
        for ($i = 0; $i < count($members); $i++) {
            if ($new == $members[$i]->getUser()) {
                $members[$i]->setRole('ADMIN');
            }
        }
    }

    public function getCreation(): ?\DateTimeInterface
    {
        return $this->creation;
    }

    public function setCreation(\DateTimeInterface $creation): self
    {
        $this->creation = $creation;

        return $this;
    }

    public function getChest(): ?int
    {
        return $this->chest;
    }

    public function setChest(int $chest): self
    {
        $this->chest = $chest;

        return $this;
    }

    public function getOpen(): ?bool
    {
        return $this->open;
    }

    public function setOpen(bool $open): self
    {
        $this->open = $open;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setAlliance($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getAlliance() === $this) {
                $user->setAlliance(null);
            }
        }

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

    /**
     * @return Collection|AllianceMember[]
     */
    public function getAllianceMembers(): Collection
    {
        return $this->allianceMembers;
    }

    public function addAllianceMember(AllianceMember $allianceMember): self
    {
        if (!$this->allianceMembers->contains($allianceMember)) {
            $this->allianceMembers[] = $allianceMember;
            $allianceMember->setAlliance($this);
        }

        return $this;
    }

    public function removeAllianceMember(AllianceMember $allianceMember): self
    {
        if ($this->allianceMembers->contains($allianceMember)) {
            $this->allianceMembers->removeElement($allianceMember);
        }

        return $this;
    }

    public function getPirateCode(): ?string
    {
        return $this->pirate_code;
    }

    public function setPirateCode(?string $pirate_code): self
    {
        $this->pirate_code = $pirate_code;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getChief(): ?User
    {
        foreach ($this->getAllianceMembers() as $link) {
            if ($link->getRole() == 'ADMIN') {
                return $link->getUser();
            }
        }
        return null;
    }

    /**
     * @return Collection|AllianceHistory[]
     */
    public function getAllianceHistories(): Collection
    {
        return $this->allianceHistories;
    }

    public function addAllianceHistory(AllianceHistory $allianceHistory): self
    {
        if (!$this->allianceHistories->contains($allianceHistory)) {
            $this->allianceHistories[] = $allianceHistory;
            $allianceHistory->setAlliance($this);
        }

        return $this;
    }

    public function removeAllianceHistory(AllianceHistory $allianceHistory): self
    {
        if ($this->allianceHistories->contains($allianceHistory)) {
            $this->allianceHistories->removeElement($allianceHistory);
            // set the owning side to null (unless already changed)
            if ($allianceHistory->getAlliance() === $this) {
                $allianceHistory->setAlliance(null);
            }
        }

        return $this;
    }

    public function getAdvert(): ?string
    {
        return $this->advert;
    }

    public function setAdvert(?string $advert): self
    {
        $this->advert = $advert;

        return $this;
    }


    public function getRequiredPower(): ?int
    {
        return $this->required_power;
    }

    public function setRequiredPower(int $required_power): self
    {
        $this->required_power = $required_power;

        return $this;
    }

    /**
     * @return Collection|AllianceWar[]
     */
    public function getAllianceWars(): Collection
    {
        return $this->allianceWars;
    }

    public function addAllianceWar(AllianceWar $allianceWar): self
    {
        if (!$this->allianceWars->contains($allianceWar)) {
            $this->allianceWars[] = $allianceWar;
            $allianceWar->setAlliance($this);
        }

        return $this;
    }

    public function removeAllianceWar(AllianceWar $allianceWar): self
    {
        if ($this->allianceWars->contains($allianceWar)) {
            $this->allianceWars->removeElement($allianceWar);
            // set the owning side to null (unless already changed)
            if ($allianceWar->getAlliance() === $this) {
                $allianceWar->setAlliance(null);
            }
        }

        return $this;
    }
}
