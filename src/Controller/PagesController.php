<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
class PagesController extends AbstractController
{
    /**
     * @Route("/pages", name="home")
     * @var Environment
     */

    private $twig;

    public function __construct(Environment  $twig){
        $this->twig = $twig;
    }

    public function home()
    {
        return new Response( $this->render('pages/home.html.twig')) ;
    }
}
