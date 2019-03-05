<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TravaillerRepository")
 */
class Travailler
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Individu")
     */
    private $id_individu;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SecteurActivite")
     */
    private $id_secteur_activite;

    public function __construct()
    {
        $this->id_individu = new ArrayCollection();
        $this->id_secteur_activite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Individu[]
     */
    public function getIdIndividu(): Collection
    {
        return $this->id_individu;
    }

    public function addIdIndividu(Individu $idIndividu): self
    {
        if (!$this->id_individu->contains($idIndividu)) {
            $this->id_individu[] = $idIndividu;
        }

        return $this;
    }

    public function removeIdIndividu(Individu $idIndividu): self
    {
        if ($this->id_individu->contains($idIndividu)) {
            $this->id_individu->removeElement($idIndividu);
        }

        return $this;
    }

    /**
     * @return Collection|SecteurActivite[]
     */
    public function getIdSecteurActivite(): Collection
    {
        return $this->id_secteur_activite;
    }

    public function addIdSecteurActivite(SecteurActivite $idSecteurActivite): self
    {
        if (!$this->id_secteur_activite->contains($idSecteurActivite)) {
            $this->id_secteur_activite[] = $idSecteurActivite;
        }

        return $this;
    }

    public function removeIdSecteurActivite(SecteurActivite $idSecteurActivite): self
    {
        if ($this->id_secteur_activite->contains($idSecteurActivite)) {
            $this->id_secteur_activite->removeElement($idSecteurActivite);
        }

        return $this;
    }
}
