<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Quartiers;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\QuartierType;
use App\Repository\FoyerRepository;

class QuartierController extends AbstractController{

    /**
     * @Route("/quartier/new", name="quartier_new")
     * @Route("/quartier/{id}/edit", name="quartier_edit")
     */
    public function form(Quartiers $quartier = null, Request $request, ObjectManager $manager) : Response {
        if(!$quartier){
            $quartier = new Quartiers();
        }
        $form = $this->createForm(QuartierType::class, $quartier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($quartier);
            $manager->flush();
            return $this->redirectToRoute('quartier_liste');
        }
        return new Response ($this->renderView("pages/quartier/create.html.twig", [
            'formQuartier' => $form->createView(),
            'editMode' => $quartier->getId() !== null
        ]));
    }
    
    /**
     * @Route("/quartier/liste", name = "quartier_liste")
     */
    public function list(FoyerRepository $repo) : Response {
        $quartiers = $repo->findAll();
        return new Response ($this->renderView("pages/quartier/list.html.twig",[
            'controller_name' => 'QuartierController',
            'quartiers'        => $quartiers
        ]));
    }
}