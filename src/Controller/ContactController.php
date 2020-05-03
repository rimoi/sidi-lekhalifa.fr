<?php

namespace App\Controller;


use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends BaseController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
