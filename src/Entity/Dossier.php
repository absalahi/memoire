<?php

namespace App\Entity;

use App\Repository\DossierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierRepository::class)]
class Dossier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_med = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_naiss = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu_naiss = null;

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->date_naiss;
    }

    public function setDateNaiss(\DateTimeInterface $date_naiss): static
    {
        $this->date_naiss = $date_naiss;

        return $this;
    }

    public function getLieuNaiss(): ?string
    {
        return $this->lieu_naiss;
    }

    public function setLieuNaiss(string $lieu_naiss): static
    {
        $this->lieu_naiss = $lieu_naiss;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }
}
