<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChristopherblogController extends AbstractController
{
    #[Route('/christopherblog', name: 'app_christopherblog')]
    public function index(): Response
    {
        return $this->render('christopherblog/index.html.twig', [
            'controller_name' => 'ChristopherblogController',
        ]);
    }
}
