<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Appartements;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\AppartementType;
use App\Repository\AppartementsRepository;
use Symfony\Component\HttpFoundation\Request;

class AppartementController extends AbstractController{

    /**
     * @Route("/appart/new", name = "appart_new")
     * @Route("/appart/{id}/edit", name = "appart_edit")
     */
    public function form(Appartements $appartement = null, Request $request, ObjectManager $manager) : Response {
        if(!$appartement){
            $appartement = new Appartements();
        }
        $form = $this->createForm(AppartementType::class, $appartement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($appartement);
            $manager->flush();
            return $this->redirectToRoute('appartement_liste');
        }
        return new Response ($this->renderView('pages/appartement/create.html.twig',[
            'formAppart' => $form->createView(),
            'editMode' => $appartement->getId() !== null
        ]));
    }

     /**
     * @Route("/appart/liste", name = "appartement_liste")
     */
    public function liste(AppartementsRepository $repo){
        $appartements = $repo->findAll();
        return new Response($this->renderView('pages/appartement/list.html.twig',[
            'controller_name' => 'AppartementController',
            'appartements'        => $appartements
        ]));
    }    
}
