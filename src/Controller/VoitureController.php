<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Voiture;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints as Assert;


class VoitureController extends AbstractController
{
      /**
    * @Route("/voiture/ajouter", name="ajouterVoiture")
    */
   public function index(): Response
   {  $voitures = $this->getDoctrine()->getRepository(Voiture::class)->findAll();
       return $this->render('voiture/ajouter.html.twig', [
           'voitures' => $voitures,
       ]);
   }
    /**
     * @Route("/voiture/{mat}", name="afficheByMatricule")
     */
    public function afficher(String $mat): Response
    {  $voitures = $this->getDoctrine()->getRepository(Voiture::class)->findBy(array('Matricule'=>$mat));
        return $this->render('voiture/index.html.twig', [
            'voitures' => $voitures,
        ]);
    } 
    
    /**
     * @Route("/voitureModifier/{mat}", name="modifierVoiture")
     */
    public function Modifier(String $mat):Response
    {  $entityManager = $this->getDoctrine()->getManager();
        $voiture = $this->getDoctrine()->getRepository(Voiture::class)->findBy(array('Matricule'=>$mat));
        if(! $voiture){
            throw $this->createNotFoundExpectation(
                'pas de voiture avec la marticule|'.$mat
            );
        }
        $voiture[0]->setMarque('POLO');
        $entityManager->flush();
        return $this->redirectToRoute('afficheByMatricule',['mat'=>$mat]);
    }
    /**
     * @Route("/supprimervoiture/{mat}", name="supprimerVoiturebymat")
     */
    public function Supprimer(String $mat):Response
    {  $entityManager = $this->getDoctrine()->getManager();
        $voiture = $this->getDoctrine()->getRepository(Voiture::class)->findBy(array('Matricule'=>$mat));
        if(! $voiture){
            throw $this->createNotFoundExpectation(
                'pas de voiture avec la marticule|'.$mat
            );
        }
        $entityManager->remove($voiture[0]);
        $entityManager->flush();
        return $this->redirectToRoute('ajouterVoiture');
    }
     /**
     * @Route("/createVoiture", name="createVoiture")
     */
    public function createVoiture():Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $voiture = new Voiture();
        $voiture->setMatricule('200TU1723');
        $voiture->setMarque('BMW');
        $voiture-> setNbrplace(2);
       
        $voiture-> setCouleur('blanc');
        $voiture-> setCarburant('shellpower');
        $voiture-> setDescription('SPORTIF');
        $voiture-> setDisponibilite(true);
        $voiture-> setDatemiseencirculation('19/12/2019');
        $entityManager->persist($voiture);
        $entityManager->flush();
        return new Response ('nouvelle voiture ajouté avec la matricule num'.$voiture->getMatricule());

    }
}
