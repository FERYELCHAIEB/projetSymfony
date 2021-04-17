<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgenceController extends AbstractController
{
    /**
          * @Route("/agence/ajouter", name="AjouterAgence")
     */
    public function index(): Response
    {
        return $this->render('agence/ajouter.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    }
    /**
          * @Route("/agence/consulter/{id}", name="consulterAgence")
     */
    public function consulter($id)
    { return $this->render('agence/consulter.html.twig', [
        'controller_name' => 'AgenceController',
    ]);
     }
     /**
          * @Route("/agence/modifier/{id}", name="modifierAgence")
     */
    public function modifier($id)
    { return $this->render('agence/modifier.html.twig', [
        'controller_name' => 'AgenceController',
    ]);
     }
      /**
          * @Route("/agence/supprimer/{id}", name="supprimerAgence")
     */
    public function supprimer($id)
    { return $this->render('agence/index.html.twig', [
        'controller_name' => 'AgenceController',
    ]);
     }
   
}
