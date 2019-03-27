<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FoyerType;
use App\Entity\Foyer;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\FoyerRepository;

class FoyerController extends AbstractController{

    /**
     * @Route("/foyer/new", name="foyer_new")
     * @Route("/foyer/{id}/edit", name="foyer_edit")
     */
    public function form(Foyer $foyer = null, Request $request, ObjectManager $manager) 
    {
        if(!$foyer){
            $foyer = new Foyer();
        }
        $form = $this->createForm(FoyerType::class, $foyer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($foyer);
            $manager->flush();
            return $this->redirectToRoute('foyer_liste');
        }
        return new Response ($this->renderView('pages/foyer/create.html.twig',[
            'formFoyer' => $form->createView(),
            'editMode' => $foyer->getId() !== null
        ]));
    }

    /**
     * @Route("/foyer/liste", name = "foyer_liste")
     */
    public function liste(FoyerRepository $repo){
        $foyers = $repo->findAll();
        return new Response($this->renderView('pages/foyer/liste.html.twig',[
            'controller_name' => 'FoyerController',
            'foyers'        => $foyers
        ]));
    }
    
}
