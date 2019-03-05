<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FokontanyRepository")
 */
class Fokontany
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
    private $chef_fokontany;

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
    private $nombre_quartier;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commune")
     */
    private $id_commune;

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

    public function getChefFokontany(): ?string
    {
        return $this->chef_fokontany;
    }

    public function setChefFokontany(string $chef_fokontany): self
    {
        $this->chef_fokontany = $chef_fokontany;

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

    public function getNombreQuartier(): ?int
    {
        return $this->nombre_quartier;
    }

    public function setNombreQuartier(int $nombre_quartier): self
    {
        $this->nombre_quartier = $nombre_quartier;

        return $this;
    }

    public function getIdCommune(): ?Commune
    {
        return $this->id_commune;
    }

    public function setIdCommune(?Commune $id_commune): self
    {
        $this->id_commune = $id_commune;

        return $this;
    }
}
