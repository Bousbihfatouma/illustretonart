<?php

namespace App\Api\Controller;

use App\Entity\User;
use App\Entity\Message;
use App\Event\MessageEvent;
use App\Entity\Conversation;
use App\Repository\UserRepository;
use App\Repository\MessageRepository;
use Symfony\Component\Mercure\Update;
use App\Repository\FriendshipRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ConversationRepository;
use Symfony\Component\Mercure\HubInterface;
use ApiPlatform\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @method \App\Entity\User getUser()
 */
class MessageController extends AbstractController
{

    public function __construct(
        private readonly SerializerInterface $serializer,
        private readonly EntityManagerInterface $em,
        private readonly MessageRepository $messageRepository,
    ) {
    }

  #[Route(path: '/conversation/{id<\d+>}/all', name: 'api_message_list', methods: ['GET'])]
    public function list(Conversation $conversation): JsonResponse
    {
        // Utilisez la méthode modifiée du repository pour obtenir les messages triés
        $messages = $this->messageRepository->findMessagesByConversationOrderedByLatest($conversation);

        $data = [];
        foreach ($messages as $message) {
            $author = $message->getSentBy();
            $data[] = [
                'author' => $message->getSentBy()->getId(),
                'username' => $message->getSentBy()->getPrenom() . ' ' . $message->getSentBy()->getNom(),
                'content' => $message->getContent(),

            ];
        }

        $json = $this->serializer->serialize($data, 'json');
        return new JsonResponse($json, Response::HTTP_OK, [], true);
}

    #[Route(path: '/conversation/{id<\d+>}/messages', name: 'api_message', methods: ['POST'])]
    public function create(
        Conversation $conversation,
        Request $request,
        ValidatorInterface $validator,
        EntityManagerInterface $em,
        EventDispatcherInterface $dispatcher
    ) {
        $data = json_decode((string) $request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $message = new Message();
        $message->setContent($data['content'] ?? '');
        $message->setConversation($conversation);
        $message->setSentAt(new \DateTimeImmutable());
        $message->setSentBy($this->getUser());
        $validator->validate($message);
        $em->persist($message);
        $em->flush();

        return new JsonResponse([
            'message' => 'Message created',
            'id' => $message->getId(),
        ], Response::HTTP_CREATED);
    }


    #[Route(path: '/conversation/{id<\d+>}', name: 'api_message_all', methods: ['GET'])]
    public function conversation(
        Conversation $conversation
    ) {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            return new JsonResponse(['error' => 'User not authenticated'], Response::HTTP_UNAUTHORIZED);
        }
        $otherUser = null;
        foreach ($conversation->getParticipants() as $participant) {
            if ($participant->getId() !== $currentUser->getId()) {
                $otherUser = $participant;
                break;
            }
        }
        if (!$otherUser) {
            return new JsonResponse(['error' => 'Other user not found'], Response::HTTP_NOT_FOUND);
        }
        return new JsonResponse([
            'otherUser' => [
                'id' => $otherUser->getId(),
                'username' => $otherUser->getPrenom() . ' ' . $otherUser->getNom() ,
            ],
        ], Response::HTTP_OK);
    }
}
 