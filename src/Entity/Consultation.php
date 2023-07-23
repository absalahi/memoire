<?php

namespace App\Entity;

use App\Repository\ConsultationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsultationRepository::class)]
class Consultation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ordonnaces = null;

    #[ORM\Column(length: 255)]
    private ?string $examen = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $date_proc_cons = null;

    #[ORM\Column(length: 255)]
    private ?string $patient = null;

    #[ORM\Column]
    private ?int $id_dossier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdonnaces(): ?string
    {
        return $this->ordonnaces;
    }

    public function setOrdonnaces(string $ordonnaces): static
    {
        $this->ordonnaces = $ordonnaces;

        return $this;
    }

    public function getExamen(): ?string
    {
        return $this->examen;
    }

    public function setExamen(string $examen): static
    {
        $this->examen = $examen;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDateProcCons(): ?string
    {
        return $this->date_proc_cons;
    }

    public function setDateProcCons(string $date_proc_cons): static
    {
        $this->date_proc_cons = $date_proc_cons;

        return $this;
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
