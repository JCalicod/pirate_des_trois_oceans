<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email_address', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registration', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_connection', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gold', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pa', '' . "\0" . 'App\\Entity\\User' . "\0" . 'victories', '' . "\0" . 'App\\Entity\\User' . "\0" . 'defeats', '' . "\0" . 'App\\Entity\\User' . "\0" . 'treasure_word', '' . "\0" . 'App\\Entity\\User' . "\0" . 'treasure_position', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tutorial', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ip', '' . "\0" . 'App\\Entity\\User' . "\0" . 'before_last_attack', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_attack', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ships', '' . "\0" . 'App\\Entity\\User' . "\0" . 'godfather', '' . "\0" . 'App\\Entity\\User' . "\0" . 'godchildren', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sent_messages', '' . "\0" . 'App\\Entity\\User' . "\0" . 'received_messages', '' . "\0" . 'App\\Entity\\User' . "\0" . 'taverns', '' . "\0" . 'App\\Entity\\User' . "\0" . 'activity', '' . "\0" . 'App\\Entity\\User' . "\0" . 'attacks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'defenses', '' . "\0" . 'App\\Entity\\User' . "\0" . 'alliance'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email_address', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registration', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_connection', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gold', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pa', '' . "\0" . 'App\\Entity\\User' . "\0" . 'victories', '' . "\0" . 'App\\Entity\\User' . "\0" . 'defeats', '' . "\0" . 'App\\Entity\\User' . "\0" . 'treasure_word', '' . "\0" . 'App\\Entity\\User' . "\0" . 'treasure_position', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tutorial', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ip', '' . "\0" . 'App\\Entity\\User' . "\0" . 'before_last_attack', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_attack', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ships', '' . "\0" . 'App\\Entity\\User' . "\0" . 'godfather', '' . "\0" . 'App\\Entity\\User' . "\0" . 'godchildren', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sent_messages', '' . "\0" . 'App\\Entity\\User' . "\0" . 'received_messages', '' . "\0" . 'App\\Entity\\User' . "\0" . 'taverns', '' . "\0" . 'App\\Entity\\User' . "\0" . 'activity', '' . "\0" . 'App\\Entity\\User' . "\0" . 'attacks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'defenses', '' . "\0" . 'App\\Entity\\User' . "\0" . 'alliance'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar(string $avatar): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailAddress', []);

        return parent::getEmailAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailAddress(string $email_address): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailAddress', [$email_address]);

        return parent::setEmailAddress($email_address);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistration(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistration', []);

        return parent::getRegistration();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistration(\DateTimeInterface $registration): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistration', [$registration]);

        return parent::setRegistration($registration);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastConnection(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastConnection', []);

        return parent::getLastConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastConnection(?\DateTimeInterface $last_connection): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastConnection', [$last_connection]);

        return parent::setLastConnection($last_connection);
    }

    /**
     * {@inheritDoc}
     */
    public function getGold(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGold', []);

        return parent::getGold();
    }

    /**
     * {@inheritDoc}
     */
    public function setGold(string $gold): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGold', [$gold]);

        return parent::setGold($gold);
    }

    /**
     * {@inheritDoc}
     */
    public function getPa(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPa', []);

        return parent::getPa();
    }

    /**
     * {@inheritDoc}
     */
    public function setPa(int $pa): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPa', [$pa]);

        return parent::setPa($pa);
    }

    /**
     * {@inheritDoc}
     */
    public function getVictories(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVictories', []);

        return parent::getVictories();
    }

    /**
     * {@inheritDoc}
     */
    public function setVictories(int $victories): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVictories', [$victories]);

        return parent::setVictories($victories);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefeats(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefeats', []);

        return parent::getDefeats();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefeats(int $defeats): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefeats', [$defeats]);

        return parent::setDefeats($defeats);
    }

    /**
     * {@inheritDoc}
     */
    public function getTreasureWord(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTreasureWord', []);

        return parent::getTreasureWord();
    }

    /**
     * {@inheritDoc}
     */
    public function setTreasureWord(string $treasure_word): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTreasureWord', [$treasure_word]);

        return parent::setTreasureWord($treasure_word);
    }

    /**
     * {@inheritDoc}
     */
    public function getTreasurePosition(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTreasurePosition', []);

        return parent::getTreasurePosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setTreasurePosition(int $treasure_position): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTreasurePosition', [$treasure_position]);

        return parent::setTreasurePosition($treasure_position);
    }

    /**
     * {@inheritDoc}
     */
    public function getTutorial(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTutorial', []);

        return parent::getTutorial();
    }

    /**
     * {@inheritDoc}
     */
    public function setTutorial(int $tutorial): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTutorial', [$tutorial]);

        return parent::setTutorial($tutorial);
    }

    /**
     * {@inheritDoc}
     */
    public function getIp(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIp', []);

        return parent::getIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setIp(string $ip): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIp', [$ip]);

        return parent::setIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeforeLastAttack(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeforeLastAttack', []);

        return parent::getBeforeLastAttack();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeforeLastAttack(?\DateTimeInterface $before_last_attack): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeforeLastAttack', [$before_last_attack]);

        return parent::setBeforeLastAttack($before_last_attack);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastAttack(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastAttack', []);

        return parent::getLastAttack();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastAttack(?\DateTimeInterface $last_attack): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastAttack', [$last_attack]);

        return parent::setLastAttack($last_attack);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getShips(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShips', []);

        return parent::getShips();
    }

    /**
     * {@inheritDoc}
     */
    public function addShip(\App\Entity\Ship $ship): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addShip', [$ship]);

        return parent::addShip($ship);
    }

    /**
     * {@inheritDoc}
     */
    public function removeShip(\App\Entity\Ship $ship): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeShip', [$ship]);

        return parent::removeShip($ship);
    }

    /**
     * {@inheritDoc}
     */
    public function getGodfather(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGodfather', []);

        return parent::getGodfather();
    }

    /**
     * {@inheritDoc}
     */
    public function setGodfather(?\App\Entity\User $godfather): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGodfather', [$godfather]);

        return parent::setGodfather($godfather);
    }

    /**
     * {@inheritDoc}
     */
    public function getGodchildren(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGodchildren', []);

        return parent::getGodchildren();
    }

    /**
     * {@inheritDoc}
     */
    public function addGodchild(\App\Entity\User $godchild): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGodchild', [$godchild]);

        return parent::addGodchild($godchild);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGodchild(\App\Entity\User $godchild): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGodchild', [$godchild]);

        return parent::removeGodchild($godchild);
    }

    /**
     * {@inheritDoc}
     */
    public function getSentMessages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSentMessages', []);

        return parent::getSentMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function addSentMessage(\App\Entity\User $sent_message): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSentMessage', [$sent_message]);

        return parent::addSentMessage($sent_message);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSentMessage(\App\Entity\User $sent_message): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSentMessage', [$sent_message]);

        return parent::removeSentMessage($sent_message);
    }

    /**
     * {@inheritDoc}
     */
    public function getReceivedMessages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReceivedMessages', []);

        return parent::getReceivedMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function addReceivedMessage(\App\Entity\User $received_message): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReceivedMessage', [$received_message]);

        return parent::addReceivedMessage($received_message);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReceivedMessage(\App\Entity\User $received_message): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReceivedMessage', [$received_message]);

        return parent::removeReceivedMessage($received_message);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaverns(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaverns', []);

        return parent::getTaverns();
    }

    /**
     * {@inheritDoc}
     */
    public function addTavern(\App\Entity\Tavern $tavern): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTavern', [$tavern]);

        return parent::addTavern($tavern);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTavern(\App\Entity\Tavern $tavern): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTavern', [$tavern]);

        return parent::removeTavern($tavern);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivity(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivity', []);

        return parent::getActivity();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivity(?\DateTimeInterface $activity): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivity', [$activity]);

        return parent::setActivity($activity);
    }

    /**
     * {@inheritDoc}
     */
    public function isActiveNow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActiveNow', []);

        return parent::isActiveNow();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttacks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttacks', []);

        return parent::getAttacks();
    }

    /**
     * {@inheritDoc}
     */
    public function addAttack(\App\Entity\War $attack): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAttack', [$attack]);

        return parent::addAttack($attack);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAttack(\App\Entity\War $attack): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAttack', [$attack]);

        return parent::removeAttack($attack);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefenses(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefenses', []);

        return parent::getDefenses();
    }

    /**
     * {@inheritDoc}
     */
    public function addDefense(\App\Entity\War $defense): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDefense', [$defense]);

        return parent::addDefense($defense);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDefense(\App\Entity\War $defense): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDefense', [$defense]);

        return parent::removeDefense($defense);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlliance(): ?\App\Entity\Alliance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlliance', []);

        return parent::getAlliance();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlliance(?\App\Entity\Alliance $alliance): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlliance', [$alliance]);

        return parent::setAlliance($alliance);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalPower(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalPower', []);

        return parent::getTotalPower();
    }

    /**
     * {@inheritDoc}
     */
    public function withdrawGold(int $quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'withdrawGold', [$quantity]);

        return parent::withdrawGold($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function addGold(int $quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGold', [$quantity]);

        return parent::addGold($quantity);
    }

}
