<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Buyer = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Seller = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 6)]
    private ?string $Amount = null;

    #[ORM\ManyToOne(targetEntity: self::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?self $Nft = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getBuyer(): ?User
    {
        return $this->Buyer;
    }

    public function setBuyer(?User $Buyer): static
    {
        $this->Buyer = $Buyer;

        return $this;
    }

    public function getSeller(): ?User
    {
        return $this->Seller;
    }

    public function setSeller(?User $Seller): static
    {
        $this->Seller = $Seller;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->Amount;
    }

    public function setAmount(string $Amount): static
    {
        $this->Amount = $Amount;

        return $this;
    }

    public function getNft(): ?self
    {
        return $this->Nft;
    }

    public function setNft(?self $Nft): static
    {
        $this->Nft = $Nft;

        return $this;
    }
}
