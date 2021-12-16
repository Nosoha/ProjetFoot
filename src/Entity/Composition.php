<?php

namespace App\Entity;

use App\Repository\CompositionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompositionRepository::class)
 */
class Composition
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=poste::class, inversedBy="compositions")
     */
    private $poste;

    /**
     * @ORM\ManyToOne(targetEntity=footballeur::class, inversedBy="compositions")
     */
    private $footballeur;

    /**
     * @ORM\ManyToOne(targetEntity=formation::class, inversedBy="compositions")
     */
    private $formation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoste(): ?poste
    {
        return $this->poste;
    }

    public function setPoste(?poste $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getFootballeur(): ?footballeur
    {
        return $this->footballeur;
    }

    public function setFootballeur(?footballeur $footballeur): self
    {
        $this->footballeur = $footballeur;

        return $this;
    }

    public function getFormation(): ?formation
    {
        return $this->formation;
    }

    public function setFormation(?formation $formation): self
    {
        $this->formation = $formation;

        return $this;
    }
}
