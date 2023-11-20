<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiorBlogController extends AbstractController
{
    #[Route('/dior/blog', name: 'app_dior_blog')]
    public function index(): Response
    {
        return $this->render('dior_blog/index.html.twig', [
            'controller_name' => 'DiorBlogController',
        ]);
    }
}
