<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\IndividuType;
use App\Entity\Individu;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Repository\IndividuRepository;

class IndividuController extends AbstractController
{
    /**
     * @Route("/individu/liste", name="individu_liste")
     * @var Response
     */
    public function list(IndividuRepository $repo): Response
    {
        $individus = $repo->findAll();
        return new Response($this->renderView('pages/individu/list.html.twig',[
            'controller_name' => 'IndividuController',
            'individus'        => $individus
        ]));
    }

    /**
     * @Route("/individu/new/", name = "individu_new")
     * @Route("/individu/{id}/edit", name="individu_edit")
     */

    public function form(Individu $individu = null, Request $request, ObjectManager $manager)
    {
        if(!$individu){ 
            $individu = new Individu();
        }
        $form = $this->createForm(IndividuType::class, $individu);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($individu);
            $manager->flush();
            return $this->redirectToRoute('individu_liste');
        }

        return new Response($this->renderView(
            'pages/individu/create.html.twig',
            [
                'formIndividu' => $form->createView(),
                'editMode' => $individu->getId() !== null
            ]
        ));
    }


    // /**
    //  * @Route("/individu/{id}","individu_show")
    //  */

    // public function detail($id): Response {
    //     return $this->render('pages/individu/detail.html.twig');
    // }



    /**
     * @Route("/individu/show",name="individu_show")
     */

    public function show (): Response {
        return new Response ($this->renderView('pages/individu/show.html.twig'));
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

}
