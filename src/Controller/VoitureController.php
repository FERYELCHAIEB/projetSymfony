<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture/ajouter", name="ajouterVoiture")
     */
    public function index(): Response
    {
        return $this->render('voiture/ajouter.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    } 
    /**
     * @Route("/voiture/modifier/{id}", name="modifierVoiture")
     */
    public function Modifier()
    {
        return $this->render('voiture/modifier.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
    /**
     * @Route("/voiture/supprimer/{id}", name="supprimerVoiture")
     */
    public function Supprimer()
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
}
