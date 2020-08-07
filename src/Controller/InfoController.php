<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/07/2020
 * Time: 21:38
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class InfoController
 * @package App\Controller
 */
class InfoController extends AbstractController
{
    /**
     * @Route("/faq", name="app_faq")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function faq()
    {
        return $this->render('faq.html.twig', []);
    }

    /**
     * @Route("/regles", name="app_rules")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rules()
    {
        return $this->render('rules.html.twig', []);
    }
}