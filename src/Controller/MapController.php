<?php

namespace App\Controller;

use App\Repository\MarkerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapController extends AbstractController
{
    #[Route('/map', name: 'app_map')]
    public function index(MarkerRepository $markerRepository): Response
    {
        $markers = $markerRepository->findAll();
 
        return $this->render('map/index.html.twig', [
            'controller_name' => 'MapController',
            'markers' => $markers
        ]);
    }
}