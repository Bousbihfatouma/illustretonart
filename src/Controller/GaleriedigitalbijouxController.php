<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GaleriedigitalbijouxController extends AbstractController
{
    #[Route('/galeriedigitalbijoux', name: 'app_galeriedigitalbijoux')]
    public function index(): Response
    {
        return $this->render('galeriedigitalbijoux/index.html.twig', [
            'controller_name' => 'GaleriedigitalbijouxController',
        ]);
    }
   
   
   //public function listeNomsPrenoms()
//{
    //$nomsPrenoms = [
        //'Designerdigitalbijouterie' => [
            //'Fatouma Bousbih',
            //'Autre nom 1',
            //'Autre nom 2',
            // ... d'autres noms
       // ],
        // ... d'autres catégories avec des noms et prénoms
    //];

    //return $this->render('galeriedigitalbijoux/index.html.twig', ['nomsPrenoms' => $nomsPrenoms]);
//}
}