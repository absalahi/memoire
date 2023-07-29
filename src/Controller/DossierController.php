<?php

namespace App\Controller;

use App\Entity\Dossier;
use App\Form\CreerDossierType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DossierController extends AbstractController
{
    #[Route('/dossier', name: 'app_dossier')]
    public function index(): Response
    {
        return $this->render('dossier/index.html.twig', [
            'controller_name' => 'DossierController',
        ]);
    }

    #[Route('/creer', name: 'app_creerdossier')]
    public function creer(Request $request ,EntityManagerInterface $entity): Response
    {
        $dossier = new Dossier();
        $form = $this->createForm(CreerDossierType::class, $dossier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            #dd($form);
            $entity->persist($dossier);
            $entity->flush();
            return $this->redirectToRoute('app_default');
               
        }

        return $this->render('dossier/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
