<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhotosparisController extends AbstractController
{
    #[Route('/photosparis', name: 'app_photosparis')]
    public function index(): Response
    {
        return $this->render('photosparis/index.html.twig', [
            'controller_name' => 'PhotosparisController',
        ]);
    }
}
