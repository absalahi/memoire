<?php

namespace App\Entity;

use App\Repository\SecretaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SecretaireRepository::class)]
class Secretaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_secr = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSecr(): ?string
    {
        return $this->id_secr;
    }

    public function setIdSecr(string $id_secr): static
    {
        $this->id_secr = $id_secr;

        return $this;
    }
}
