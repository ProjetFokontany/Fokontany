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

class IndividuController extends AbstractController
{

    /**
     * @Route("/individu", name="individu.liste")
     * @var Response
     */
    public function index(): Response
    {
        return new Response($this->renderView('pages/individu/index.html.twig'));
    }

    /**
     * @Route("/individu/create/", name = "individu_create")
     */

    public function create(Request $request, ObjectManager $manager)
    {
        $individu = new Individu();
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
                'formIndividu' => $form->createView()
            ]
        ));
    }

    /**
     * @Route("/individu/liste", name = "individu_liste")
     */
    public function list(): Response
    {
        return new Response($this->renderView('pages/individu/list.html.twig'));
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
