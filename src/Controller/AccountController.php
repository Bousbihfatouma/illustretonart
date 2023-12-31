<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\TexteblogType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ConversationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountController extends AbstractController
{
    private $entityManager;

    private UserRepository $userRepository;

    private ConversationRepository $conversationRepository;

    public function __construct(EntityManagerInterface $entityManager, UserRepository $userRepository, ConversationRepository $conversationRepository)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->conversationRepository = $conversationRepository;
    }

    #[Route('/account', name: 'account_index')]
    public function index(Request $request): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $conversations = $this->conversationRepository->findByCreator($user);

        $form = $this->createForm(TexteblogType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $file = $form['profileImage']->getData();
            if ($file) {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('image_directory'), // Define this parameter in services.yaml or config/services.yaml
                    $fileName
                );

                $user->setProfileImage($fileName);
            }

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $this->redirectToRoute('account_index');
        }

        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
            'form' => $form->createView(),
            'users' => $this->userRepository->findAllExceptUser($this->getUser()),
            'conversations' => $conversations,
        ]);
    }
}