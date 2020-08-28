<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/07/2020
 * Time: 02:26
 */

namespace App\Controller;


use App\Service\PaginatorServices;
use App\Service\RankingServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class RankingController
 * @package App\Controller
 * @Route("/classement")
 */
class RankingController extends AbstractController
{
    private $em;
    private $rankingServices;
    private $paginatorServices;
    private $items_per_page;

    public function __construct(EntityManagerInterface $em, RankingServices $rankingServices, PaginatorServices $paginatorServices)
    {
        $this->em = $em;
        $this->rankingServices = $rankingServices;
        $this->paginatorServices = $paginatorServices;
        $this->items_per_page = 20;
    }

    /**
     * @Route("", name="app_ranking")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function userRanking(Request $request)
    {
        if (!$page = $request->get('page')) {
            $page = 1;
        }
        $ranking = $this->rankingServices->getUserRanking();
        $nb_pages = ceil(count($ranking) / $this->items_per_page);
        $current_ranking = $this->paginatorServices->paginate($ranking, $page, $this->items_per_page);
        return $this->render('ranking.html.twig', [
            'current_page' => $page,
            'nb_pages' => $nb_pages,
            'ranking' => $current_ranking,
            'items_per_page' => $this->items_per_page
        ]);
    }
}