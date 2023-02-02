<?php

namespace App\Entity;

use App\Repository\LeveringRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeveringRepository::class)]
class Levering
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $leveranier_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datumtijd = null;

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

    public function getLeveranierId(): ?int
    {
        return $this->leveranier_id;
    }

    public function setLeveranierId(int $leveranier_id): self
    {
        $this->leveranier_id = $leveranier_id;

        return $this;
    }

    public function getDatumtijd(): ?\DateTimeInterface
    {
        return $this->datumtijd;
    }

    public function setDatumtijd(\DateTimeInterface $datumtijd): self
    {
        $this->datumtijd = $datumtijd;

        return $this;
    }
}
