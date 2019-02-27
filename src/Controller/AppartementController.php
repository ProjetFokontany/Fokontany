<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppartementController extends AbstractController{

    /**
     * @Route("/appartement", name="appartement.liste")
     * @var Response
     */
    public function index(): Response {
        return $this->render('pages/appartement/index.html.twig');
    }

    /**
     * @Route("/appartement/search/{search}","")
     */
    // public function search($id): Response {
    //     return $this->render('pages/appartement/liste.html.twig');
    // }

    /**
     * @Route("/appartement/delete/{id}","appartement.delete.{id}")
     */

    // public function delete($id): Response {
    //     return $this->render('pages/appartement/liste.html.twig');
    // }

    /**
     * @Route("/appartement/modifier/{id}","appartement.modifier.{id}")
     */

    // public function modifier($id): Respose {
    //     return $this->render('pages/appartement/modification-page.html.twig');
    // }

    /**
     * @Route("/appartement/edit","")
     */

    // public function edit(): Response {
    //     return $this->render('pages/appartement/liste.html.twig');
    // }

    /**
     * @Route("/appartement/detail","")
     */

    // public function detail($id): Response {
    //     return $this->render('pages/appartement/detail.html.twig');
    // }
}
