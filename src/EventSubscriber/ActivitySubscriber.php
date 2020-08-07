<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 10/05/2020
 * Time: 01:54
 */

namespace App\EventSubscriber;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Security;

class ActivitySubscriber implements EventSubscriberInterface {
    private $em;
    private $security;

    public function __construct(EntityManagerInterface $em, Security $security) {
        $this->em = $em;
        $this->security = $security;
    }

    public function onController() {
        if ($this->security->getToken()) {
            $user = $this->security->getToken()->getUser();
            if ($user instanceof User) {
                $user->setActivity(new \DateTime('now', New \DateTimeZone('Europe/Paris')));
                $this->em->persist($user);
                $this->em->flush();
            }
        }
    }

    public static function getSubscribedEvents() {
        return [
            KernelEvents::CONTROLLER => ['onController', 20]
        ];
    }

}