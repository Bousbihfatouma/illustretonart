<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: 'App\Repository\MessageRepository')]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['read:message'])]
    private int $id;

    #[ORM\Column(type: 'text')]
    #[Groups(['read:message', 'create:message'])]
    private string $content;

    #[ORM\Column(type: 'datetime')]
    #[Groups(['read:message'])]
    private \DateTimeInterface $sentAt;

    #[ORM\ManyToOne(targetEntity: Conversation::class, inversedBy: 'messages')]
    #[Groups(['read:message'])]
    private ?Conversation $conversation = null;

    #[ORM\Column(type: 'boolean')]
    #[Groups(['read:message', 'create:message'])]
    private bool $isRead = false;

    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Groups(['read:message'])]
    private ?\DateTimeInterface $readAt = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['read:message'])]
    private ?User $sentBy = null;

    public function __construct()
    {
        $this->sentAt = new \DateTime();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getSentAt(): \DateTimeInterface
    {
        return $this->sentAt;
    }

    public function setSentAt(\DateTimeInterface $sentAt): void
    {
        $this->sentAt = $sentAt;
    }


    public function getConversation(): ?Conversation
    {
        return $this->conversation;
    }

    public function setConversation(?Conversation $conversation): void
    {
        $this->conversation = $conversation;
    }

    public function isRead(): bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): void
    {
        $this->isRead = $isRead;
    }

    public function getReadAt(): ?\DateTimeInterface
    {
        return $this->readAt;
    }

    public function setReadAt(?\DateTimeInterface $readAt): void
    {
        $this->readAt = $readAt;
    }

    public function getSentBy(): ?User
    {
        return $this->sentBy;
    }

    public function setSentBy(?User $sentBy): static
    {
        $this->sentBy = $sentBy;

        return $this;
    }
}
 