<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportController extends AbstractController
{
    /**
     * @Route("/transports", name="transports")
     */
    public function transports(): Response
    {
        return $this->render('transport/transports.html.twig', [
        ]);
    }

    /**
     * @Route("/orbiter", name="orbiter")
     */
    public function orbiter(): Response
    {
        return $this->render('transport/orbiter.html.twig', [
        ]);
    }

    /**
     * @Route("/shuttle", name="shuttle")
     */
    public function shuttle(): Response
    {
        return $this->render('transport/shuttle.html.twig', [
        ]);
    }

    /**
     * @Route("/ad-astra", name="ad_astra")
     */
    public function adAstra(): Response
    {
        return $this->render('transport/ad-astra.html.twig', [
        ]);
    }

    /**
     * @Route("/cruiser", name="cruiser")
     */
    public function cruiser(): Response
    {
        return $this->render('transport/cruiser.html.twig', [
        ]);
    }
}
