<?php

namespace App\Entity;

use App\Repository\ConstantesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConstantesRepository::class)]
class Constantes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $poids = null;

    #[ORM\Column(length: 255)]
    private ?string $tension = null;

    #[ORM\Column(length: 255)]
    private ?string $temperature = null;

    #[ORM\Column]
    private ?int $id_dossier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(string $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTension(): ?string
    {
        return $this->tension;
    }

    public function setTension(string $tension): static
    {
        $this->tension = $tension;

        return $this;
    }

    public function getTemperature(): ?string
    {
        return $this->temperature;
    }

    public function setTemperature(string $température): static
    {
        $this->temperature = $température;

        return $this;
    }

    public function getIdDossier(): ?int
    {
        return $this->id_dossier;
    }

    public function setIdDossier(int $id_dossier): static
    {
        $this->id_dossier = $id_dossier;

        return $this;
    }
}
