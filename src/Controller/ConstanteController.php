<?php

namespace App\Controller;

use App\Entity\Constantes;
use App\Form\AjoutConstanteType;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConstanteController extends AbstractController
{
    #[Route('/constante', name: 'app_constante')]
    public function index(): Response
    {
        return $this->render('constante/index.html.twig', [
            'controller_name' => 'ConstanteController',
        ]);
    }

    #[Route('/ajout', name: 'app_ajoutconstante')]
    public function creer(Request $request ,EntityManagerInterface $entity): Response
    {
        $constantes = new Constantes();
        $form = $this->createForm(AjoutConstanteType::class, $constantes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            #dd($form);
            $entity->persist($constantes);
            $entity->flush();
            return $this->redirectToRoute('app_default');
               
        }

        return $this->render('constante/const.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
