<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $email_address;


    /**
     * @ORM\Column(type="datetime")
     */
    private $registration;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_connection;

    /**
     * @ORM\Column(type="bigint")
     */
    private $gold = 5000;

    /**
     * @ORM\Column(type="integer")
     */
    private $pa = 30;

    /**
     * @ORM\Column(type="integer")
     */
    private $victories = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $defeats = 0;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $treasure_word;

    /**
     * @ORM\Column(type="integer")
     */
    private $treasure_position;

    /**
     * @ORM\Column(type="integer")
     */
    private $tutorial = 0;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ip;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $before_last_attack;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_attack;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ship", mappedBy="owner")
     */
    private $ships;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="godchildren")
     */
    private $godfather;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="godfather")
     */
    private $godchildren;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Messaging", mappedBy="sender")
     */
    private $sent_messages;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Messaging", mappedBy="receiver")
     */
    private $received_messages;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tavern", mappedBy="owner")
     */
    private $taverns;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $activity;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\War", mappedBy="attacker")
     */
    private $attacks;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\War", mappedBy="defender")
     */
    private $defenses;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Alliance", inversedBy="users")
     */
    private $alliance;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clues", mappedBy="user")
     */
    private $clues;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Treasure", mappedBy="owner")
     */
    private $treasures;

    /**
     * @ORM\Column(type="boolean")
     */
    private $show_alliance_advert = true;

    public function __construct() {
        $this->ships = new ArrayCollection();
        $this->setRegistration(new \DateTime('now', New \DateTimeZone('Europe/Paris')));
        $this->godchildren = new ArrayCollection();
        $this->sent_messages = new ArrayCollection();
        $this->received_messages = new ArrayCollection();
        $this->taverns = new ArrayCollection();
        $this->attacks = new ArrayCollection();
        $this->defenses = new ArrayCollection();
        $this->clues = new ArrayCollection();
        $this->treasures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }


    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getEmailAddress(): ?string
    {
        return $this->email_address;
    }

    public function setEmailAddress(string $email_address): self
    {
        $this->email_address = $email_address;

        return $this;
    }

    public function getRegistration(): ?\DateTimeInterface
    {
        return $this->registration;
    }

    public function setRegistration(\DateTimeInterface $registration): self
    {
        $this->registration = $registration;

        return $this;
    }

    public function getLastConnection(): ?\DateTimeInterface
    {
        return $this->last_connection;
    }

    public function setLastConnection(?\DateTimeInterface $last_connection): self
    {
        $this->last_connection = $last_connection;

        return $this;
    }

    public function getGold(): ?string
    {
        return $this->gold;
    }

    public function setGold(string $gold): self
    {
        $this->gold = $gold;

        return $this;
    }

    public function getPa(): ?int
    {
        return $this->pa;
    }

    public function setPa(int $pa): self
    {
        $this->pa = $pa;

        return $this;
    }

    public function getVictories(): ?int
    {
        return $this->victories;
    }

    public function setVictories(int $victories): self
    {
        $this->victories = $victories;

        return $this;
    }

    public function getDefeats(): ?int
    {
        return $this->defeats;
    }

    public function setDefeats(int $defeats): self
    {
        $this->defeats = $defeats;

        return $this;
    }

    public function getTreasureWord(): ?string
    {
        return $this->treasure_word;
    }

    public function setTreasureWord(string $treasure_word): self
    {
        $this->treasure_word = $treasure_word;

        return $this;
    }

    public function getTreasurePosition(): ?int
    {
        return $this->treasure_position;
    }

    public function setTreasurePosition(int $treasure_position): self
    {
        $this->treasure_position = $treasure_position;

        return $this;
    }

    public function getTutorial(): ?int
    {
        return $this->tutorial;
    }

    public function setTutorial(int $tutorial): self
    {
        $this->tutorial = $tutorial;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getBeforeLastAttack(): ?\DateTimeInterface
    {
        return $this->before_last_attack;
    }

    public function setBeforeLastAttack(?\DateTimeInterface $before_last_attack): self
    {
        $this->before_last_attack = $before_last_attack;

        return $this;
    }

    public function getLastAttack(): ?\DateTimeInterface
    {
        return $this->last_attack;
    }

    public function setLastAttack(?\DateTimeInterface $last_attack): self
    {
        $this->last_attack = $last_attack;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
            $ship->setOwner($this);
        }

        return $this;
    }

    public function removeShip(Ship $ship): self
    {
        if ($this->ships->contains($ship)) {
            $this->ships->removeElement($ship);
            // set the owning side to null (unless already changed)
            if ($ship->getOwner() === $this) {
                $ship->setOwner(null);
            }
        }

        return $this;
    }

    public function getGodfather(): ?self
    {
        return $this->godfather;
    }

    public function setGodfather(?self $godfather): self
    {
        $this->godfather = $godfather;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getGodchildren(): Collection
    {
        return $this->godchildren;
    }

    public function addGodchild(self $godchild): self
    {
        if (!$this->godchildren->contains($godchild)) {
            $this->godchildren[] = $godchild;
            $godchild->setGodfather($this);
        }

        return $this;
    }

    public function removeGodchild(self $godchild): self
    {
        if ($this->godchildren->contains($godchild)) {
            $this->godchildren->removeElement($godchild);
            // set the owning side to null (unless already changed)
            if ($godchild->getGodfather() === $this) {
                $godchild->setGodfather(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getSentMessages(): Collection
    {
        return $this->sent_messages;
    }

    public function addSentMessage(self $sent_message): self
    {
        if (!$this->sent_messages->contains($sent_message)) {
            $this->sent_messages[] = $sent_message;
            $sent_message->setSender($this);
        }

        return $this;
    }

    public function removeSentMessage(self $sent_message): self
    {
        if ($this->sent_messages->contains($sent_message)) {
            $this->sent_messages->removeElement($sent_message);
            // set the owning side to null (unless already changed)
            if ($sent_message->getSender() === $this) {
                $sent_message->setSender(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getReceivedMessages(): Collection
    {
        return $this->received_messages;
    }

    public function addReceivedMessage(self $received_message): self
    {
        if (!$this->received_messages->contains($received_message)) {
            $this->received_messages[] = $received_message;
            $received_message->setReceiver($this);
        }

        return $this;
    }

    public function removeReceivedMessage(self $received_message): self
    {
        if ($this->received_messages->contains($received_message)) {
            $this->received_messages->removeElement($received_message);
            // set the owning side to null (unless already changed)
            if ($received_message->getReceiver() === $this) {
                $received_message->setReceiver(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tavern[]
     */
    public function getTaverns(): Collection
    {
        return $this->taverns;
    }

    public function addTavern(Tavern $tavern): self
    {
        if (!$this->taverns->contains($tavern)) {
            $this->taverns[] = $tavern;
            $tavern->setOwner($this);
        }

        return $this;
    }

    public function removeTavern(Tavern $tavern): self
    {
        if ($this->taverns->contains($tavern)) {
            $this->taverns->removeElement($tavern);
            // set the owning side to null (unless already changed)
            if ($tavern->getOwner() === $this) {
                $tavern->setOwner(null);
            }
        }

        return $this;
    }

    public function getActivity(): ?\DateTimeInterface
    {
        return $this->activity;
    }

    public function setActivity(?\DateTimeInterface $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function isActiveNow() {
        $delay = new \DateTime('10 minutes ago', New \DateTimeZone('Europe/Paris'));
        return ($this->getActivity() > $delay);
    }

    /**
     * @return Collection|War[]
     */
    public function getAttacks(): Collection
    {
        return $this->attacks;
    }

    public function addAttack(War $attack): self
    {
        if (!$this->attacks->contains($attack)) {
            $this->attacks[] = $attack;
            $attack->setAttacker($this);
        }

        return $this;
    }

    public function removeAttack(War $attack): self
    {
        if ($this->attacks->contains($attack)) {
            $this->attacks->removeElement($attack);
            // set the owning side to null (unless already changed)
            if ($attack->getAttacker() === $this) {
                $attack->setAttacker(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|War[]
     */
    public function getDefenses(): Collection
    {
        return $this->defenses;
    }

    public function addDefense(War $defense): self
    {
        if (!$this->defenses->contains($defense)) {
            $this->defenses[] = $defense;
            $defense->setDefender($this);
        }

        return $this;
    }

    public function removeDefense(War $defense): self
    {
        if ($this->defenses->contains($defense)) {
            $this->defenses->removeElement($defense);
            // set the owning side to null (unless already changed)
            if ($defense->getDefender() === $this) {
                $defense->setDefender(null);
            }
        }

        return $this;
    }

    public function getAlliance(): ?Alliance
    {
        return $this->alliance;
    }

    public function setAlliance(?Alliance $alliance): self
    {
        $this->alliance = $alliance;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPower(): int
    {
        $power = 0;
        foreach ($this->ships as $ship) {
            $power += 500 * $ship->getLevel();
        }
        $power += intval($this->gold / 1000);
        return $power;
    }

    /**
     * @param int $quantity
     */
    public function withdrawGold(int $quantity)
    {
        $this->setGold($this->getGold() - $quantity);
    }

    /**
     * @param int $quantity
     */
    public function addGold(int $quantity)
    {
        $this->setGold($this->getGold() + $quantity);
    }

    /**
     * @return Collection|Clues[]
     */
    public function getClues(): Collection
    {
        return $this->clues;
    }

    public function addClue(Clues $clue): self
    {
        if (!$this->clues->contains($clue)) {
            $this->clues[] = $clue;
            $clue->setUser($this);
        }

        return $this;
    }

    public function removeClue(Clues $clue): self
    {
        if ($this->clues->contains($clue)) {
            $this->clues->removeElement($clue);
            // set the owning side to null (unless already changed)
            if ($clue->getUser() === $this) {
                $clue->setUser(null);
            }
        }

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
            $treasure->setOwner($this);
        }

        return $this;
    }

    public function removeTreasure(Treasure $treasure): self
    {
        if ($this->treasures->contains($treasure)) {
            $this->treasures->removeElement($treasure);
            // set the owning side to null (unless already changed)
            if ($treasure->getOwner() === $this) {
                $treasure->setOwner(null);
            }
        }

        return $this;
    }

    public function getShowAllianceAdvert(): ?bool
    {
        return $this->show_alliance_advert;
    }

    public function setShowAllianceAdvert(bool $show_alliance_advert): self
    {
        $this->show_alliance_advert = $show_alliance_advert;

        return $this;
    }
}
