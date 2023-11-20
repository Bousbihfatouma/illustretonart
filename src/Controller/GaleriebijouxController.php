<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GaleriebijouxController extends AbstractController
{
    #[Route('/galeriebijoux', name: 'app_galeriebijoux')]
    public function index(): Response
    {
        return $this->render('galeriebijoux/index.html.twig', [
            'controller_name' => 'GaleriebijouxController',
        ]);
    }
}
