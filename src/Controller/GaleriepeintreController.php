<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GaleriepeintreController extends AbstractController
{
    #[Route('/galeriepeintre', name: 'app_galeriepeintre')]
    public function index(): Response
    {
        return $this->render('galeriepeintre/index.html.twig', [
            'controller_name' => 'GaleriepeintreController',
        ]);
    }
}
