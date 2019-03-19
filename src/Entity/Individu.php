<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IndividuRepository")
 */
class Individu
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naiss;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $numero_cin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\NiveauEtude")
     */
    private $id_niveau_etude;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SituationMatrimoniale")
     */
    private $id_situation_matrimoniale;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Foyer")
     */
    private $id_foyer;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $sexe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->date_naiss;
    }

    public function setDateNaiss(\DateTimeInterface $date_naiss): self
    {
        $this->date_naiss = $date_naiss;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getNumeroCin(): ?string
    {
        return $this->numero_cin;
    }

    public function setNumeroCin(string $numero_cin): self
    {
        $this->numero_cin = $numero_cin;

        return $this;
    }

    public function getIdNiveauEtude(): ?NiveauEtude
    {
        return $this->id_niveau_etude;
    }

    public function setIdNiveauEtude(?NiveauEtude $id_niveau_etude): self
    {
        $this->id_niveau_etude = $id_niveau_etude;

        return $this;
    }

    public function getIdSituationMatrimoniale(): ?SituationMatrimoniale
    {
        return $this->id_situation_matrimoniale;
    }

    public function setIdSituationMatrimoniale(?SituationMatrimoniale $id_situation_matrimoniale): self
    {
        $this->id_situation_matrimoniale = $id_situation_matrimoniale;

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

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }
}
