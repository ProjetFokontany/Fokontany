<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FokontanyController extends AbstractController{

    /**
     * @Route("/fokontany", name="fokontany.liste")
     * @var Response
     */
    public function index(): Response {
        return $this->render('pages/fokontany/liste.html.twig');
    }

        /**
     * @Route("/fokontany/search={search}","")
     */
    // public function search($id): Response {
    //     return $this->render('pages/fokontany/liste.html.twig');
    // }

    /**
     * @Route("/fokontany/delete/{id}","fokontany.delete.{id}")
     */

    // public function delete($id): Response {
    //     return $this->render('pages/fokontany/liste.html.twig');
    // }

    /**
     * @Route("/fokontany/modifier/{id}","fokontany.modifier.{id}")
     */

    // public function modifier($id): Respose {
    //     return $this->render('pages/fokontany/modification-page.html.twig');
    // }

    /**
     * @Route("/fokontany/edit","")
     */

    // public function edit(): Response {
    //     return $this->render('pages/fokontany/liste.html.twig');
    // }

    /**
     * @Route("/fokontany/detail","")
     */

    // public function detail($id): Response {
    //     return $this->render('pages/fokontany/detail.html.twig');
    // }
}
