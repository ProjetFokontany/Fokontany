<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FoyerRepository")
 */
class Foyer
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
    private $pere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mere;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre;

    /**
     * @ORM\Column(type="float")
     */
    private $revenu_pere;

    /**
     * @ORM\Column(type="float")
     */
    private $revenu_mere;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Appartements")
     */
    private $id_appartement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Quartiers")
     */
    private $id_quartier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPere(): ?string
    {
        return $this->pere;
    }

    public function setPere(string $pere): self
    {
        $this->pere = $pere;

        return $this;
    }

    public function getMere(): ?string
    {
        return $this->mere;
    }

    public function setMere(string $mere): self
    {
        $this->mere = $mere;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getRevenuPere(): ?float
    {
        return $this->revenu_pere;
    }

    public function setRevenuPere(float $revenu_pere): self
    {
        $this->revenu_pere = $revenu_pere;

        return $this;
    }

    public function getRevenuMere(): ?float
    {
        return $this->revenu_mere;
    }

    public function setRevenuMere(float $revenu_mere): self
    {
        $this->revenu_mere = $revenu_mere;

        return $this;
    }

    public function getIdAppartement(): ?Appartements
    {
        return $this->id_appartement;
    }

    public function setIdAppartement(?Appartements $id_appartement): self
    {
        $this->id_appartement = $id_appartement;

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
