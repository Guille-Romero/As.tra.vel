<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VacationsController extends AbstractController
{
    /**
     * @Route("/hot-offers", name="hot_offers")
     */
    public function hotOffers(): Response
    {
        return $this->render('vacations/hot-offers.html.twig', [
        ]);
    }

    /**
     * @Route("/destinations", name="destinations")
     */
    public function destinations(): Response
    {
        return $this->render('vacations/destination.html.twig', [
        ]);
    }

    /**
     * @Route("/activities", name="activities")
     */
    public function activities(): Response
    {
        return $this->render('vacations/activities.html.twig', [
        ]);
    }

    /**
     * @Route("/cruisers", name="cruisers")
     */
    public function cruisers(): Response
    {
        return $this->render('vacations/cruisers.html.twig', [
        ]);
    }
}
