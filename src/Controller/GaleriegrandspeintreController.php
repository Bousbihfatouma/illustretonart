<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GaleriegrandspeintreController extends AbstractController
{
    #[Route('/galeriegrandspeintre', name: 'app_galeriegrandspeintre')]
    public function index(): Response
    {
        return $this->render('galeriegrandspeintre/index.html.twig', [
            'controller_name' => 'GaleriegrandspeintreController',
        ]);
    }
}
