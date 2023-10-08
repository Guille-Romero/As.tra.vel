<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    /**
     * @Route("/business", name="business")
     */
    public function business(): Response
    {
        return $this->render('travel/business.html.twig', [
        ]);
    }
}

