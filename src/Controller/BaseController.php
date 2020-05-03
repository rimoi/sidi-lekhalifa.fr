<?php


namespace App\Controller;


use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    private $flashyNotifier;

    public function __construct(FlashyNotifier $flashyNotifier)
    {
        $this->flashyNotifier = $flashyNotifier;
    }

    public function flashSuccess(string $message)
    {
        $this->flashyNotifier->success($message);
    }

    public function flashError(string $message)
    {
        $this->flashyNotifier->error($message);
    }
}