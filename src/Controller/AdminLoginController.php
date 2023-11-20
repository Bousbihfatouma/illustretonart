<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\AdminLoginType; 

class AdminLoginController extends AbstractController
{
   
      #[Route('/admin/login', name: 'app_admin_login')]
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
        // Gérez l'affichage du formulaire de connexion et la soumission ici
        $form = $this->createForm(AdminLoginType::class);

        return $this->render('admin_login/index.html.twig', [
            'form' => $form->createView(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
            'last_username' => $authenticationUtils->getLastUsername(),
        ]);
    }
}

