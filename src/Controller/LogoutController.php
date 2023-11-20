<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

class LogoutController extends AbstractController
{
    #[Route('/logout', name: 'app_logout')]
    public function index(TokenStorageInterface $tokenStorage): RedirectResponse
    {
        $tokenStorage->setToken(null);

        return $this->redirectToRoute('app_pr_sentation');
    }

    public function onLogoutSuccess(): Response
    {
        // Cette méthode est nécessaire en raison de l'implémentation de LogoutSuccessHandlerInterface
        // Vous pouvez laisser le corps vide ou ajouter une redirection supplémentaire ici si nécessaire.
        // Par exemple, rediriger vers une page d'accueil.
        return $this->redirectToRoute('app_pr_sentation');
    }
}
