<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JosephineblogController extends AbstractController
{
    #[Route('/josephineblog', name: 'app_josephineblog')]
    public function index(): Response
    {
        return $this->render('josephineblog/index.html.twig', [
            'controller_name' => 'JosephineblogController',
        ]);
    }
}
