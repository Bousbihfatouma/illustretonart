<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FatoumagalerieController extends AbstractController
{
    #[Route('/fatoumagalerie', name: 'app_fatoumagalerie')]
    public function index(): Response
    {
        return $this->render('fatoumagalerie/index.html.twig', [
            'controller_name' => 'FatoumagalerieController',
        ]);
    }
}
