<?php

namespace App\Controller;

use MercurySeries\FlashyBundle\FlashyNotifier;

use Symfony\Component\HttpFoundation\Request;
use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class HomeController extends BaseController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(Request $request, TranslatorInterface $translator)
    {
//        $translator->setLocale('ar');
//        $request->setLocale('ar');

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
