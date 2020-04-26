<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WhoAreWeController extends AbstractController
{
    /**
     * @Route("/who/are/we", name="who_are_we")
     */
    public function index()
    {
        return $this->render('who_are_we/index.html.twig', [
            'controller_name' => 'WhoAreWeController',
        ]);
    }
}
