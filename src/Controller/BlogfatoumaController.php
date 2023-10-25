<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogfatoumaController extends AbstractController
{
    #[Route('/blogfatouma', name: 'app_blogfatouma')]
    public function index(): Response
    {
        return $this->render('blogfatouma/index.html.twig', [
            'controller_name' => 'BlogfatoumaController',
        ]);
    }
}
