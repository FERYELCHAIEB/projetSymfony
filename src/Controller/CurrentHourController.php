<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CurrentHourController extends AbstractController
{
    /**
     * @Route("/current/hour", name="current_hour")
     */
    public function index()
    { $hour = date("h:i:sa");
        return $this->render('current_hour/index.html.twig', [
            'time' => $hour,
        ]);
    }
}
