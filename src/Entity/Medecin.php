<?php

namespace App\Entity;

use App\Repository\MedecinRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedecinRepository::class)]
class Medecin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_med = null;

    #[ORM\Column(length: 255)]
    private ?string $domaine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMed(): ?string
    {
        return $this->id_med;
    }

    public function setIdMed(string $id_med): static
    {
        $this->id_med = $id_med;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): static
    {
        $this->domaine = $domaine;

        return $this;
    }
}
