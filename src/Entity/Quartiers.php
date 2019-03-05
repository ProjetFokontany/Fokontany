<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuartiersRepository")
 */
class Quartiers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localisation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_foyer;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_appartement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Fokontany")
     */
    private $id_fokontany;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getNombreFoyer(): ?int
    {
        return $this->nombre_foyer;
    }

    public function setNombreFoyer(int $nombre_foyer): self
    {
        $this->nombre_foyer = $nombre_foyer;

        return $this;
    }

    public function getNombreAppartement(): ?int
    {
        return $this->nombre_appartement;
    }

    public function setNombreAppartement(int $nombre_appartement): self
    {
        $this->nombre_appartement = $nombre_appartement;

        return $this;
    }

    public function getIdFokontany(): ?Fokontany
    {
        return $this->id_fokontany;
    }

    public function setIdFokontany(?Fokontany $id_fokontany): self
    {
        $this->id_fokontany = $id_fokontany;

        return $this;
    }
}
