<?php

namespace App\Controller;

use App\Form\TexteblogType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;



class AccountController extends AbstractController
{
    #[Route('/account', name: 'account_index')]
    public function index(Request $request): Response
    {
        $user = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Créer le formulaire
        $form = $this->createForm(TexteblogType::class, $user);
        $form->handleRequest($request);

        // Vérifier si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrez les modifications dans la base de données si nécessaire
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            // Rediriger ou effectuer d'autres actions après l'enregistrement
            return $this->redirectToRoute('account_index');
        }

        // Rendre le template avec le formulaire
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
            'form' => $form->createView(),
        ]);
    }
}
