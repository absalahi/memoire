<?php

namespace App\Entity;

use App\Repository\InfirmiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfirmiereRepository::class)]
class Infirmiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_inf = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInf(): ?string
    {
        return $this->id_inf;
    }

    public function setIdInf(string $id_inf): static
    {
        $this->id_inf = $id_inf;

        return $this;
    }
}
