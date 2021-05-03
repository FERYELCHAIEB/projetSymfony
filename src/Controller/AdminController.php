<?php

namespace App\Controller; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Agence;
use App\Entity\Voiture;
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {$ch =("Agences des voitures");
       $entityManager=$this->getDoctrine()->getManager();
        $agence =  $entityManager->getRepository(Agence::class)->findAll();
        
        $voiture =  $entityManager->getRepository(Voiture::class)->findAll();
        return $this->render('admin/index.html.twig', [
          
            'title' => $ch,
            'agences' => $agence,
            'voitures' =>$voiture,
           
        ]);
    }
}
