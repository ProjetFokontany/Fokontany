<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AppartementsRepository")
 */
class Appartements
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
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_foyer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Quartiers")
     */
    private $id_quartier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

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

    public function getIdQuartier(): ?Quartiers
    {
        return $this->id_quartier;
    }

    public function setIdQuartier(?Quartiers $id_quartier): self
    {
        $this->id_quartier = $id_quartier;

        return $this;
    }
}
