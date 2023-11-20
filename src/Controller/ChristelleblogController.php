<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChristelleblogController extends AbstractController
{
    #[Route('/christelleblog', name: 'app_christelleblog')]
    public function index(): Response
    {
        return $this->render('christelleblog/index.html.twig', [
            'controller_name' => 'ChristelleblogController',
        ]);
    }
}
