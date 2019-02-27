<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuartierController extends AbstractController{

    /**
     * @Route("/quartier", name="quartier.liste")
     * @var Response
     */
    public function index(): Response {
        return $this->render('pages/quartier/index.html.twig');
    }
    /**
     * @Route("/quartier/search={search}","")
     */
    // public function search($id): Response {
    //     return $this->render('pages/quartier/liste.html.twig');
    // }

    /**
     * @Route("/quartier/delete/{id}","delete.{id}")
     */

    // public function delete($id): Response {
    //     return $this->render('pages/quartier/liste.html.twig');
    // }

    /**
     * @Route("/quartier/modifier/{id}","modifier.{id}")
     */

    // public function modifier($id): Respose {
    //     return $this->render('pages/quartier/modification-page.html.twig');
    // }

    /**
     * @Route("/quartier/edit","")
     */

    // public function edit(): Response {
    //     return $this->render('pages/quartier/liste.html.twig');
    // }

    /**
     * @Route("/quartier/detail","")
     */

    // public function detail($id): Response {
    //     return $this->render('pages/quartier/detail.html.twig');
    // }
}