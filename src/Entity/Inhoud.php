<?php

namespace App\Entity;

use App\Repository\InhoudRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InhoudRepository::class)]
class Inhoud
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $pakket_id = null;

    #[ORM\Column]
    private ?int $product_id = null;

    #[ORM\Column(length: 20)]
    private ?string $aantal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPakketId(): ?int
    {
        return $this->pakket_id;
    }

    public function setPakketId(int $pakket_id): self
    {
        $this->pakket_id = $pakket_id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getAantal(): ?string
    {
        return $this->aantal;
    }

    public function setAantal(string $aantal): self
    {
        $this->aantal = $aantal;

        return $this;
    }
}
