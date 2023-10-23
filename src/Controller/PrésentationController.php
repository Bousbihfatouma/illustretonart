<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrésentationController extends AbstractController
{
    #[Route('/', name: 'app_pr_sentation')]
    public function index(): Response
    {
        return $this->render('présentation/index.html.twig', [
            'controller_name' => 'PrésentationController',
        ]);
    }
}
