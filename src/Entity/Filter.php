<?php

namespace App\Entity;

use App\Repository\FilterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilterRepository::class)]
class Filter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $filterTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $filterSlug = null;

    #[ORM\OneToMany(mappedBy: 'filters', targetEntity: Marker::class)]
    private Collection $markers;

    public function __construct()
    {
        $this->markers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilterTitle(): ?string
    {
        return $this->filterTitle;
    }

    public function setFilterTitle(string $filterTitle): static
    {
        $this->filterTitle = $filterTitle;

        return $this;
    }

    public function getFilterSlug(): ?string
    {
        return $this->filterSlug;
    }

    public function setFilterSlug(string $filterSlug): static
    {
        $this->filterSlug = $filterSlug;

        return $this;
    }

    /**
     * @return Collection<int, Marker>
     */
    public function getMarkers(): Collection
    {
        return $this->markers;
    }

    public function addMarker(Marker $marker): static
    {
        if (!$this->markers->contains($marker)) {
            $this->markers->add($marker);
            $marker->setFilters($this);
        }

        return $this;
    }

    public function removeMarker(Marker $marker): static
    {
        if ($this->markers->removeElement($marker)) {
            // set the owning side to null (unless already changed)
            if ($marker->getFilters() === $this) {
                $marker->setFilters(null);
            }
        }

        return $this;
    }
}