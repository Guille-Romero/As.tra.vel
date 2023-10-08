<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DidYouKnowController extends AbstractController
{
    /**
     * @Route("/mars-record-breaker", name="mars_records")
     */
    public function marsRecords(): Response
    {
        return $this->render('did_you_know/marsrecords.html.twig', [
        ]);
    }

    /**
     * @Route("venus-rotation", name="venus_rotation")
     */
    public function venusRotation(): Response
    {
        return $this->render('did_you_know/venusrotation.html.twig', [
        ]);
    }

    /**
     * @Route("/mercury-shrinks", name="mercury_shrinks")
     */
    public function mercuryShrinks(): Response
    {
        return $this->render('did_you_know/mercuryshrinks.html.twig', [
        ]);
    }

    /**
     * @Route("/oumuamua", name="oumuamua")
     */
    public function oumuamua(): Response
    {
        return $this->render('did_you_know/oumuamua.html.twig', [
        ]);
    }
}
