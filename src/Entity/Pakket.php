<?php

namespace App\Entity;

use App\Repository\PakketRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PakketRepository::class)]
class Pakket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $klant_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datum = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $uitgifte_datum = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getKlantId(): ?int
    {
        return $this->klant_id;
    }

    public function setKlantId(int $klant_id): self
    {
        $this->klant_id = $klant_id;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getUitgifteDatum(): ?\DateTimeInterface
    {
        return $this->uitgifte_datum;
    }

    public function setUitgifteDatum(?\DateTimeInterface $uitgifte_datum): self
    {
        $this->uitgifte_datum = $uitgifte_datum;

        return $this;
    }
}
