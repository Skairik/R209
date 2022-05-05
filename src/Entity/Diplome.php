<?php

namespace App\Entity;

use App\Repository\DiplomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DiplomeRepository::class)
 */
class Diplome
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity=But::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $but;

    /**
     * @ORM\ManyToOne(targetEntity=Intitule::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $intitule;

    /**
     * @ORM\ManyToOne(targetEntity=Universite::class, inversedBy="diplomes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $universite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getBut(): ?But
    {
        return $this->but;
    }

    public function setBut(?But $but): self
    {
        $this->but = $but;

        return $this;
    }

    public function getIntitule(): ?Intitule
    {
        return $this->intitule;
    }

    public function setIntitule(?Intitule $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getUniversite(): ?Universite
    {
        return $this->universite;
    }

    public function setUniversite(?Universite $universite): self
    {
        $this->universite = $universite;

        return $this;
    }
}
