<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorypeintregalerieController extends AbstractController
{
    #[Route('/categorypeintregalerie', name: 'app_categorypeintregalerie')]
    public function index(): Response
    {
        return $this->render('categorypeintregalerie/index.html.twig', [
            'controller_name' => 'CategorypeintregalerieController',
        ]);
    }
}
