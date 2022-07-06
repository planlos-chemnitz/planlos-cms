<?php

namespace App\Entity;

use App\Repository\EventRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'text')]
    private string $description;

    #[ORM\Column(type: 'text', nullable: true)]
    private string $content;

    #[ORM\Column(type: 'string', length: 255)]
    private string $location;

    #[ORM\Column(type: 'datetime_immutable')]
    private DateTimeImmutable $startDateTime;

    #[ORM\Column(type: 'datetime_immutable')]
    private DateTimeImmutable $endDateTime;

    #[ORM\Column(type: 'string', length: 255)]
    private string $slug;

    #[ORM\Column(type: 'boolean')]
    private bool $isActive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getStartDateTime(): ?DateTimeImmutable
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(DateTimeImmutable $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function getEndDateTime(): ?DateTimeImmutable
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(DateTimeImmutable $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
