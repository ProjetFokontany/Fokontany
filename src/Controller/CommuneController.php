<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommuneController extends AbstractController{

    /**
     * @Route("/commune", name="commune.liste")
     * @var Response
     */
    public function index(): Response {
        return $this->render('pages/commune/index.html.twig');
    }
    /**
     * @Route("/commune/search/{search}","")
     */
    // public function search($id): Response {
    //     return $this->render('pages/commune/liste.html.twig');
    // }

    /**
     * @Route("/commune/delete/{id}","commune.delete.{id}")
     */

    // public function delete($id): Response {
    //     return $this->render('pages/commune/liste.html.twig');
    // }

    /**
     * @Route("/commune/modifier/{id}","commune.modifier.{id}")
     */

    // public function modifier($id): Respose {
    //     return $this->render('pages/commune/modification-page.html.twig');
    // }

    /**
     * @Route("/commune/edit","")
     */

    // public function edit(): Response {
    //     return $this->render('pages/commune/liste.html.twig');
    // }

     /**
     * @Route("/commune/detail","")
     */

    // public function detail($id): Response {
    //     return $this->render('pages/commune/detail.html.twig');
    // }

    
}
