<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndividuController extends AbstractController{

    /**
     * @Route("/individu", name="individu.liste")
     * @var Response
     */
    public function index(): Response {
        return $this->render('pages/individu/index.html.twig');
    }
    
    /**
     * @Route("/individu/create/")
     */

    public function create() : Response {
        return $this->render('pages/individu/create.html.twig');
    }

    /**
     * @Route("/individu/search={search}","")
     */
    // public function search($id): Response {
    //     return $this->render('pages/individu/liste.html.twig');
    // }

    /**
     * @Route("/individu/delete/{id}","individu.delete.{id}")
     */

    // public function delete($id): Response {
    //     return $this->render('pages/individu/liste.html.twig');
    // }

    /**
     * @Route("/individu/modifier/{id}","individu.modifier.{id}")
     */

    // public function modifier($id): Respose {
    //     return $this->render('pages/individu/modification-page.html.twig');
    // }

    /**
     * @Route("/individu/edit","")
     */

    // public function edit(): Response {
    //     return $this->render('pages/individu/liste.html.twig');
    // }

    /**
     * @Route("/individu/detail","")
     */

    // public function detail($id): Response {
    //     return $this->render('pages/individu/detail.html.twig');
    // }
}
