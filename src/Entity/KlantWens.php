<?php

namespace App\Entity;

use App\Repository\KlantWensRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KlantWensRepository::class)]
class KlantWens
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $wens_id = null;

    #[ORM\Column]
    private ?int $klant_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWensId(): ?int
    {
        return $this->wens_id;
    }

    public function setWensId(int $wens_id): self
    {
        $this->wens_id = $wens_id;

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
}
