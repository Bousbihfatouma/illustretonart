<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParisblogController extends AbstractController
{
    #[Route('/parisblog', name: 'app_parisblog')]
    public function index(): Response
    {
        return $this->render('parisblog/index.html.twig', [
            'controller_name' => 'ParisblogController',
        ]);
    }
}
