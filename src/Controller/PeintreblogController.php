<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeintreblogController extends AbstractController
{
    #[Route('/peintreblog', name: 'app_peintreblog')]
    public function index(): Response
    {
        return $this->render('peintreblog/index.html.twig', [
            'controller_name' => 'PeintreblogController',
        ]);
    }
}
