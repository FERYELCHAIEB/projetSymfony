<?php

namespace App\Controller; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {$ch =("Agences des voitures");
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'title' => $ch,
            'Agences' =>[
                'id' =>'#',
                'Nom' =>'feriel',
                'Tel Agence' =>'0000000',
                'Adresse Ville' =>'cité des oranges'
                
            ],
            'Voiture' =>
            [
                'id' => '#',
                'Marque' =>'BMW',
                'Couleur' =>'Bleu',
                'Description' =>'Sport',
                'Nombre De place' =>'2',
                'Nom Agence' => ' '
            ]
        ]);
    }
}
