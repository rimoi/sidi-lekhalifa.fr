<?php

namespace App\Controller;

use App\Entity\Page;
use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends BaseController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $pages = $this->getDoctrine()->getRepository(Page::class)->findBy(['archived' => false]);

        return $this->render('home/index.html.twig', compact('pages'));
    }
}
