<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\MarkerRepository;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

#[ORM\Entity(repositoryClass: MarkerRepository::class)]
class Marker
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $markerTitle = null;

    
    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[UploadableField(mapping: 'marker', fileNameProperty: 'icon')]
    private ?File $MarkerFile = null;
    

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $markerImage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $markerEmail = null;

    #[ORM\Column(nullable: true)]
    private ?int $tel = null;

    #[ORM\Column]
    private ?float $longitude = null;

    #[ORM\Column]
    private ?float $latitude = null;

    #[ORM\Column(length: 255)]
    private ?string $markerSlug = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $markerDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $street = null;

    #[ORM\Column(length: 255)]
    private ?string $zipCode = null;

    #[ORM\ManyToOne(inversedBy: 'markers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Filter $filters = null;

  
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $icon = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $UpdatedAt = null;

    
    public function __toString(): string
    {
        return json_encode($this);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarkerTitle(): ?string
    {
        return $this->markerTitle;
    }

    public function setMarkerTitle(string $markerTitle): static
    {
        $this->markerTitle = $markerTitle;

        return $this;
    }

        
    //     /**
    //  * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
    //  * of 'UploadedFile' is injected into this setter to trigger the update. If this
    //  * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
    //  * must be able to accept an instance of 'File' as the bundle will inject one here
    //  * during Doctrine hydration.
    //  *
    //  * @param File|UploadedFile|null $imageFile
    //  */
    // public function setImageFile(?File $imageFile = null): void
    // {
    //     $this->MarkerFile = $imageFile;

    //     if (null !== $imageFile) {
    //         // It is required that at least one field changes if you are using doctrine
    //         // otherwise the event listeners won't be called and the file is lost
    //         $this->UpdatedAt = new \DateTimeImmutable();
    //     }
    // }


    public function getMarkerImage(): ?string
    {
        return $this->markerImage;
    }

    public function setMarkerImage(?string $markerImage): static
    {
        $this->markerImage = $markerImage;

        return $this;
    }

    public function getMarkerEmail(): ?string
    {
        return $this->markerEmail;
    }

    public function setMarkerEmail(?string $markerEmail): static
    {
        $this->markerEmail = $markerEmail;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getMarkerSlug(): ?string
    {
        return $this->markerSlug;
    }

    public function setMarkerSlug(string $markerSlug): static
    {
        $this->markerSlug = $markerSlug;

        return $this;
    }

    public function getMarkerDescription(): ?string
    {
        return $this->markerDescription;
    }

    public function setMarkerDescription(string $markerDescription): static
    {
        $this->markerDescription = $markerDescription;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): static
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getFilters(): ?Filter
    {
        return $this->filters;
    }

    public function setFilters(?Filter $filters): static
    {
        $this->filters = $filters;

        return $this;
    }


    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $UpdatedAt): static
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }
}