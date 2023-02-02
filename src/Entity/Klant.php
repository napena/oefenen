<?php

namespace App\Entity;

use App\Repository\KlantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KlantRepository::class)]
class Klant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $gezins_naam = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plaats = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adres = null;

    #[ORM\Column(length: 255)]
    private ?string $telefoon = null;

    #[ORM\Column]
    private ?int $volwassen = null;

    #[ORM\Column(nullable: true)]
    private ?int $kind = null;

    #[ORM\Column(nullable: true)]
    private ?int $baby = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGezinsNaam(): ?string
    {
        return $this->gezins_naam;
    }

    public function setGezinsNaam(string $gezins_naam): self
    {
        $this->gezins_naam = $gezins_naam;

        return $this;
    }

    public function getPlaats(): ?string
    {
        return $this->plaats;
    }

    public function setPlaats(?string $plaats): self
    {
        $this->plaats = $plaats;

        return $this;
    }

    public function getAdres(): ?string
    {
        return $this->adres;
    }

    public function setAdres(?string $adres): self
    {
        $this->adres = $adres;

        return $this;
    }

    public function getTelefoon(): ?string
    {
        return $this->telefoon;
    }

    public function setTelefoon(string $telefoon): self
    {
        $this->telefoon = $telefoon;

        return $this;
    }

    public function getVolwassen(): ?int
    {
        return $this->volwassen;
    }

    public function setVolwassen(int $volwassen): self
    {
        $this->volwassen = $volwassen;

        return $this;
    }

    public function getKind(): ?int
    {
        return $this->kind;
    }

    public function setKind(?int $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getBaby(): ?int
    {
        return $this->baby;
    }

    public function setBaby(?int $baby): self
    {
        $this->baby = $baby;

        return $this;
    }
}
