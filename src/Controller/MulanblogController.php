<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MulanblogController extends AbstractController
{
    #[Route('/mulanblog', name: 'app_mulanblog')]
    public function index(): Response
    {
        return $this->render('mulanblog/index.html.twig', [
            'controller_name' => 'MulanblogController',
        ]);
    }
}
