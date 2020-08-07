<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/07/2020
 * Time: 02:28
 */

namespace App\Service;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class RankingServices
{
    private $requestStack;
    private $em;
    private $userServices;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em, UserServices $userServices)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
        $this->userServices = $userServices;
    }

    /**
     * @return array
     */
    public function getUserRanking(): array
    {
        $ranking = [];
        $users = $this->em->getRepository(User::class)->findAll();
        foreach ($users as $user) {
            $ranking[] = [
                'id' => $user->getId(),
                'alliance' => $user->getAlliance(),
                'username' => $user->getUsername(),
                'power' => $this->userServices->getPower($user),
                'ships' => $user->getShips(),
                'ratio' => ($user->getVictories() - $user->getDefeats())
            ];
        }
        array_multisort(array_column($ranking, 'power'), SORT_DESC, $ranking);
        return $ranking;
    }
}