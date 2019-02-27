<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FoyerController extends AbstractController{

    /**
     * @Route("/foyer", name="foyer.liste")
     * @var Response
     */
    public function index(): Response {
<<<<<<< HEAD
        return $this->render('pages/foyer/liste.html.twig');
=======
        return $this->render('pages/foyer/index.html.twig');
>>>>>>> dev-interface
    }

    /**
     * @Route("/foyer/search={search}","")
     */
    // public function search($id): Response {
    //     return $this->render('pages/foyer/liste.html.twig');
    // }

    /**
     * @Route("/foyer/delete/{id}","foyer.delete.{id}")
     */

    // public function delete($id): Response {
    //     return $this->render('pages/foyer/liste.html.twig');
    // }

    /**
     * @Route("/foyer/modifier/{id}","foyer.modifier.{id}")
     */

    // public function modifier($id): Respose {
    //     return $this->render('pages/foyer/modification-page.html.twig');
    // }

    /**
     * @Route("/foyer/edit","")
     */

    // public function edit(): Response {
    //     return $this->render('pages/foyer/liste.html.twig');
    // }

    /**
     * @Route("/foyer/detail","")
     */

    // public function detail($id): Response {
    //     return $this->render('pages/foyer/detail.html.twig');
    // }
}
