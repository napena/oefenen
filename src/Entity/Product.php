<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $category_id = null;

    #[ORM\Column(length: 255)]
    private ?string $streepjescode = null;

    #[ORM\Column(length: 255)]
    private ?string $omschrijving = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $aantal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(?int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getstreepjescode(): ?string
    {
        return $this->streepjescode;
    }

    public function setstreepjescode(string $streepjescode): self
    {
        $this->streepjescode = $streepjescode;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getAantal(): ?string
    {
        return $this->aantal;
    }

    public function setAantal(?string $aantal): self
    {
        $this->aantal = $aantal;

        return $this;
    }
}
