<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChristophergalerieController extends AbstractController
{
    #[Route('/christophergalerie', name: 'app_christophergalerie')]
    public function index(): Response
    {
        return $this->render('christophergalerie/index.html.twig', [
            'controller_name' => 'ChristophergalerieController',
        ]);
    }
}
