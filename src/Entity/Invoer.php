<?php

namespace App\Entity;

use App\Repository\InvoerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoerRepository::class)]
class Invoer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $levering_id = null;

    #[ORM\Column]
    private ?int $product_id = null;

    #[ORM\Column(length: 25)]
    private ?string $aantal = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $houdbaar_tot = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLeveringId(): ?int
    {
        return $this->levering_id;
    }

    public function setLeveringId(int $levering_id): self
    {
        $this->levering_id = $levering_id;

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

    public function getHoudbaarTot(): ?\DateTimeInterface
    {
        return $this->houdbaar_tot;
    }

    public function setHoudbaarTot(\DateTimeInterface $houdbaar_tot): self
    {
        $this->houdbaar_tot = $houdbaar_tot;

        return $this;
    }
}
