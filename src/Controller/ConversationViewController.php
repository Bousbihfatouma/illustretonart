<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConversationViewController extends AbstractController
{

    private EntityManagerInterface $em;

    private UserRepository $userRepository;

    public function __construct(EntityManagerInterface $em, UserRepository $userRepository)
    {
        $this->em = $em;
        $this->userRepository = $userRepository;
    }

    #[Route('/conversation/{id}', name: 'conversation_view')]
    public function view(int $id): Response
    {
        $conversation = $this->em->getRepository(Conversation::class)->find($id);

        if (!$conversation) {
            throw $this->createNotFoundException("La conversation n'existe pas.");
        }

        if (!$conversation->getCreatedBy() == $this->getUser()) {
            throw $this->createAccessDeniedException("Vous n'êtes pas autorisé à voir cette conversation.");
        }

        return $this->render('conversation/view.html.twig', [
            'conversation' => $conversation,
        ]);
    }

    #[Route('/conversation/add/{id}', name: 'conversation_add')]
    public function add(int $id): Response
    {
        /** @var User $user */
        $user = $this->userRepository->findOneBy(['id' => $id]);

        if($user === null) {
            throw $this->createNotFoundException("L'utilisateur n'existe pas.");
        }

        $conversation = $this->em->getRepository(Conversation::class)->findLatestConversationBetweenUsers($this->getUser(), $user);

        if($conversation !== null) {
            return $this->redirectToRoute('conversation_view', ['id' => $conversation->getId()]);
        }

        $conversation = new Conversation();
        $conversation->setTitle('Nouvelle Conversation');
        $conversation->setCreatedBy($this->getUser());
        $conversation->setCreatedAt(new \DateTime());
        $conversation->addParticipant($user);

        $this->em->persist($conversation);
        $this->em->flush();


        return $this->redirectToRoute('conversation_view', ['id' => $conversation->getId()]);

    }


}