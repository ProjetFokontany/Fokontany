<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepenseRepository")
 */
class Depense
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $frais_scolarite;

    /**
     * @ORM\Column(type="float")
     */
    private $electricite;

    /**
     * @ORM\Column(type="float")
     */
    private $eau;

    /**
     * @ORM\Column(type="float")
     */
    private $internet;

    /**
     * @ORM\Column(type="float")
     */
    private $autre;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Foyer")
     */
    private $id_foyer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFraisScolarite(): ?float
    {
        return $this->frais_scolarite;
    }

    public function setFraisScolarite(float $frais_scolarite): self
    {
        $this->frais_scolarite = $frais_scolarite;

        return $this;
    }

    public function getElectricite(): ?float
    {
        return $this->electricite;
    }

    public function setElectricite(float $electricite): self
    {
        $this->electricite = $electricite;

        return $this;
    }

    public function getEau(): ?float
    {
        return $this->eau;
    }

    public function setEau(float $eau): self
    {
        $this->eau = $eau;

        return $this;
    }

    public function getInternet(): ?float
    {
        return $this->internet;
    }

    public function setInternet(float $internet): self
    {
        $this->internet = $internet;

        return $this;
    }

    public function getAutre(): ?float
    {
        return $this->autre;
    }

    public function setAutre(float $autre): self
    {
        $this->autre = $autre;

        return $this;
    }

    public function getIdFoyer(): ?Foyer
    {
        return $this->id_foyer;
    }

    public function setIdFoyer(?Foyer $id_foyer): self
    {
        $this->id_foyer = $id_foyer;

        return $this;
    }
}
