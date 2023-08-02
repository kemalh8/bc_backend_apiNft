<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $FistName = null;

    #[ORM\Column(length: 255)]
    private ?string $LastName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFistName(): ?string
    {
        return $this->FistName;
    }

    public function setFistName(string $FistName): static
    {
        $this->FistName = $FistName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): static
    {
        $this->LastName = $LastName;

        return $this;
    }
}
