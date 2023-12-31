<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;




#[ORM\Entity(repositoryClass: UserRepository::class)]

#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255 ,nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255,nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT,nullable: true)]
    private ?string $aPropos = null;

    #[ORM\Column(length: 255,nullable: true)]
    private ?string $instagram = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\OneToMany(mappedBy: 'author', targetEntity: Blog::class)]
    private Collection $blogs;

    #[ORM\OneToMany(mappedBy: 'author', targetEntity: Illustration::class)]
    private Collection $illustrations;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Texteblog = null;

    #[ORM\OneToMany(mappedBy: 'createdBy', targetEntity: Conversation::class)]
    private Collection $conversations;

    #[ORM\ManyToMany(targetEntity: Conversation::class, mappedBy: 'participants')]
    private Collection $conversationsParticipants;

    #[ORM\OneToMany(mappedBy: 'sentBy', targetEntity: Message::class)]
    private Collection $messages;

    public function __construct()
    {
        $this->blogs = new ArrayCollection();
        $this->illustrations = new ArrayCollection();
        $this->conversations = new ArrayCollection();
        $this->conversationsParticipants = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->galeries = new ArrayCollection();
    }

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAPropos(): ?string
    {
        return $this->aPropos;
    }

    public function setAPropos(string $aPropos): static
    {
        $this->aPropos = $aPropos;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(string $instagram): static
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('prenom')
         ->add('nom')
        ->add('password')
        ->add('domaine', ChoiceType::class, [
            'choices' => [
                'Designer' => 'designer',
                'Bijoutier' => 'bijoutier',
                'Peintre' => 'peintre',
                'Photographe' => 'photographe',
            ],
            'label' => 'Choisissez votre domaine',
        ]);
}
  public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class, 
        ]);
    }

  /**
   * @return Collection<int, Blog>
   */
  public function getBlogs(): Collection
  {
      return $this->blogs;
  }

  public function addBlog(Blog $blog): static
  {
      if (!$this->blogs->contains($blog)) {
          $this->blogs->add($blog);
          $blog->setAuthor($this);
      }

      return $this;
  }

  public function removeBlog(Blog $blog): static
  {
      if ($this->blogs->removeElement($blog)) {
          // set the owning side to null (unless already changed)
          if ($blog->getAuthor() === $this) {
              $blog->setAuthor(null);
          }
      }

      return $this;
  }

  /**
   * @return Collection<int, Illustration>
   */
  public function getIllustrations(): Collection
  {
      return $this->illustrations;
  }

  public function addIllustration(Illustration $illustration): static
  {
      if (!$this->illustrations->contains($illustration)) {
          $this->illustrations->add($illustration);
          $illustration->setAuthor($this);
      }

      return $this;
  }

  public function removeIllustration(Illustration $illustration): static
  {
      if ($this->illustrations->removeElement($illustration)) {
          // set the owning side to null (unless already changed)
          if ($illustration->getAuthor() === $this) {
              $illustration->setAuthor(null);
          }
      }

      return $this;
  }

  public function getTexteblog(): ?string
  {
      return $this->Texteblog;
  }

  public function setTexteblog(?string $Texteblog): static
  {
      $this->Texteblog = $Texteblog;

      return $this;
  }
     /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png" })
     */
    private $profileImage;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Galerie::class)]
    private Collection $galeries;

    // ...

    public function getProfileImage(): ?string
    {
        return $this->profileImage;
    }

    public function setProfileImage(?string $profileImage): self
    {
        $this->profileImage = $profileImage;

        return $this;
    }

      /**
     * @return Collection<int, Conversation>
     */
    public function getConversations(): Collection
    {
        return $this->conversations;
    }

    public function addConversation(Conversation $conversation): static
    {
        if (!$this->conversations->contains($conversation)) {
            $this->conversations->add($conversation);
            $conversation->setCreatedBy($this);
        }

        return $this;
    }

    public function removeConversation(Conversation $conversation): static
    {
        if ($this->conversations->removeElement($conversation)) {
            // set the owning side to null (unless already changed)
            if ($conversation->getCreatedBy() === $this) {
                $conversation->setCreatedBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Conversation>
     */
    public function getConversationsParticipants(): Collection
    {
        return $this->conversationsParticipants;
    }

    public function addConversationsParticipant(Conversation $conversationsParticipant): static
    {
        if (!$this->conversationsParticipants->contains($conversationsParticipant)) {
            $this->conversationsParticipants->add($conversationsParticipant);
            $conversationsParticipant->addParticipant($this);
        }

        return $this;
    }

    public function removeConversationsParticipant(Conversation $conversationsParticipant): static
    {
        if ($this->conversationsParticipants->removeElement($conversationsParticipant)) {
            $conversationsParticipant->removeParticipant($this);
        }

        return $this;
    }
    
    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): static
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setSentBy($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): static
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getSentBy() === $this) {
                $message->setSentBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Galerie>
     */
    public function getGaleries(): Collection
    {
        return $this->galeries;
    }

    public function addGalery(Galerie $galery): static
    {
        if (!$this->galeries->contains($galery)) {
            $this->galeries->add($galery);
            $galery->setUser($this);
        }

        return $this;
    }

    public function removeGalery(Galerie $galery): static
    {
        if ($this->galeries->removeElement($galery)) {
            // set the owning side to null (unless already changed)
            if ($galery->getUser() === $this) {
                $galery->setUser(null);
            }
        }

        return $this;
    }
    
}
