<?php

namespace App\Entity;

use App\Repository\LeverancierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeverancierRepository::class)]
class Leverancier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $company = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adres = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $plaats = null;

    #[ORM\Column(length: 255)]
    private ?string $contact_persoon = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 25)]
    private ?string $telefoon = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $volgende_lever_datum = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

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

    public function getPlaats(): ?string
    {
        return $this->plaats;
    }

    public function setPlaats(?string $plaats): self
    {
        $this->plaats = $plaats;

        return $this;
    }

    public function getContactPersoon(): ?string
    {
        return $this->contact_persoon;
    }

    public function setContactPersoon(string $contact_persoon): self
    {
        $this->contact_persoon = $contact_persoon;

        return $this;
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

    public function getTelefoon(): ?string
    {
        return $this->telefoon;
    }

    public function setTelefoon(string $telefoon): self
    {
        $this->telefoon = $telefoon;

        return $this;
    }

    public function getVolgendeLeverDatum(): ?\DateTimeInterface
    {
        return $this->volgende_lever_datum;
    }

    public function setVolgendeLeverDatum(\DateTimeInterface $volgende_lever_datum): self
    {
        $this->volgende_lever_datum = $volgende_lever_datum;

        return $this;
    }
}
