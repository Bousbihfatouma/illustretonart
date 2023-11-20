<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogphotographeController extends AbstractController
{
    #[Route('/blogphotographe', name: 'app_blogphotographe')]
    public function index(): Response
    {
        return $this->render('blogphotographe/index.html.twig', [
            'controller_name' => 'BlogphotographeController',
        ]);
    }
}
