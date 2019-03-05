<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommuneRepository")
 */
class Commune
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
    private $maire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secretaire;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_travailleur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_fokontany;

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

    public function getMaire(): ?string
    {
        return $this->maire;
    }

    public function setMaire(string $maire): self
    {
        $this->maire = $maire;

        return $this;
    }

    public function getSecretaire(): ?string
    {
        return $this->secretaire;
    }

    public function setSecretaire(string $secretaire): self
    {
        $this->secretaire = $secretaire;

        return $this;
    }

    public function getNombreTravailleur(): ?int
    {
        return $this->nombre_travailleur;
    }

    public function setNombreTravailleur(int $nombre_travailleur): self
    {
        $this->nombre_travailleur = $nombre_travailleur;

        return $this;
    }

    public function getNombreFokontany(): ?int
    {
        return $this->nombre_fokontany;
    }

    public function setNombreFokontany(int $nombre_fokontany): self
    {
        $this->nombre_fokontany = $nombre_fokontany;

        return $this;
    }
}
