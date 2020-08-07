<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 06/05/2020
 * Time: 00:45
 */

namespace App\Controller;


use App\Entity\Trade;
use App\Entity\User;
use App\Service\TradeServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class TradeController
 * @package App\Controller
 * @Route("/commerce")
 * @IsGranted("ROLE_USER")
 */
class TradeController extends AbstractController {
    private $em;
    private $user;
    private $tradeServices;

    public function __construct(EntityManagerInterface $em, Security $security, TradeServices $tradeServices) {
        $this->em = $em;
        $this->user = $this->em->getRepository(User::class)->findOneBy(['username' => $security->getUser()->getUsername()]);
        $this->tradeServices = $tradeServices;
    }

    /**
     * @Route("/buy-or-sell", name="app_trade_validate")
     */
    public function buyOrSell(Request $request) {
        // Appel AJAX
        if ($request->isXmlHttpRequest()) {
            $sell = $request->get('sell');
            $buy = $request->get('buy');
            $items = $request->get('items');

            // Achat
            if ($sell == 'false' && $buy == 'true') {
                $this->tradeServices->buy($this->user, $items);
            }
            // Vente
            elseif ($sell == 'true' && $buy == 'false') {
                $this->tradeServices->sell($this->user, $items);
            }
            else {
                $label = 'danger';
                $message = 'Vous devez renseigner au moins une valeur.';
                return new JsonResponse(['label' => $label, 'message' => $message, 'gold' => $this->user->getGold()]);
            }


            if ($this->tradeServices->getSuccess()) {
                $label = 'success';
                $message = $this->tradeServices->getSuccess();
            }
            else  {
                $label = 'danger';
                $message = $this->tradeServices->getError();
            }
            return new JsonResponse(['label' => $label, 'message' => $message, 'gold' => $this->user->getGold()]);
        }
    }

    /**
     * @Route("/", name="app_trade")
     */
    public function show() {
        $trade = $this->em->getRepository(Trade::class)->findAll()[0];
        return $this->render('authenticated/trade.html.twig', [
            'trade' => $trade
        ]);
    }
}