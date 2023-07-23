<?php

namespace App\Entity;

use App\Repository\DossierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierRepository::class)]
class Dossier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $patient = null;

    #[ORM\Column(length: 255)]
    private ?string $id_med = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatient(): ?string
    {
        return $this->patient;
    }

    public function setPatient(string $patient): static
    {
        $this->patient = $patient;

        return $this;
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
}
