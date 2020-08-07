<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 28/04/2020
 * Time: 00:06
 */

namespace App\Service;


use App\Entity\Messaging;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class MessagingServices {
    private $em;
    private $error;

    /**
     * UserServices constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
        $this->error = '';
    }

    /**
     * @return string
     */
    public function getError() : string {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error) {
        $this->error = $error;
    }

    /**
     * @param array $messages
     */
    public function seeNewMessages(array $messages) {
        for ($i = 0; $i < count($messages); $i++) {
            if (!$messages[$i]->getSeen()) {
                $messages[$i]->setSeen(true);
                $this->em->persist($messages[$i]);
            }
        }
        $this->em->flush();
    }

    /**
     * @param array $data
     * @param User|null $user
     * @throws \Exception
     */
    public function sendMessage(array $data, User $user = null) {
        $message = new Messaging();
        $message->setTitle($data['title']);
        $message->setMessage($data['message']);
        $message->setMessageDate(new \DateTime('now', new \DateTimeZone('Europe/Paris')));
        $message->setReceiver($this->em->getRepository(User::class)->findOneBy(['username' => $data['receiver']]));
        $message->setSender($user);
        $message->setSeen(false);
        if ($user) {
            $message->setHtmlReader(false);
        }
        else {
            $message->setHtmlReader(true);
        }
        $this->em->persist($message);
        $this->em->flush();
    }

    /**
     * @param array $data
     * @return bool
     */
    public function checkMessageContent(array $data) : bool {
        if (strlen($data['message']) >= 3 && strlen($data['message']) <= 1500) {
            return true;
        }
        else {
            $this->setError('Le message doit contenir entre 3 et 1 500 caractères.');
        }
        return false;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function checkMessageTitle(array $data) : bool {
        if (strlen($data['title']) >= 3 && strlen($data['title']) <= 30) {
            return $this->checkMessageContent($data);
        }
        else {
            $this->setError('Le titre doit contenir entre 3 et 30 caractères.');
        }
        return false;
    }

    /**
     * @param array $data
     * @param User $user
     * @return bool
     */
    public function checkMessage(array $data, User $user) : bool {
        if ($receiver = $this->em->getRepository(User::class)->findOneBy(['username' => $data['receiver']])) {
            if ($user->getUsername() != $receiver->getUsername()) {
                return $this->checkMessageTitle($data);
            }
            else {
                $this->setError('Vous ne pouvez pas vous envoyer un message.');
            }
        }
        else {
            $this->setError('Le destinataire renseigné n\'existe pas.');
        }
        return false;
    }
}