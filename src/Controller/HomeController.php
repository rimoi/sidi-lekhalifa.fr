<?php

namespace App\Controller;

use App\Entity\Page;
use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends BaseController
{
    /**
     * @Route("/", name="home", options={"sitemap" = {"priority" = 0.7, "changefreq" = "weekly" }})
     */
    public function index()
    {
        $pages = $this->getDoctrine()->getRepository(Page::class)->findBy(['archived' => false]);

        return $this->render('home/index.html.twig', compact('pages'));
    }
}
