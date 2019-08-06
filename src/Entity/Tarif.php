<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tarif
 *
 * @ORM\Table(name="tarif")
 * @ORM\Entity
 */
class Tarif
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tarif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTarif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bureau_1mois", type="string", length=200, nullable=true)
     */
    private $bureau1mois;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adhesion", type="string", length=200, nullable=true)
     */
    private $adhesion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="journee1_gratuite", type="string", length=200, nullable=true)
     */
    private $journee1Gratuite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1heure_adh", type="string", length=200, nullable=true)
     */
    private $loc1heureAdh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1demijournee_adh", type="string", length=200, nullable=true)
     */
    private $loc1demijourneeAdh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1journee_adh", type="string", length=200, nullable=true)
     */
    private $loc1journeeAdh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1mois_adh", type="string", length=200, nullable=true)
     */
    private $loc1moisAdh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1heure_nadh", type="string", length=200, nullable=true)
     */
    private $loc1heureNadh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1demijournee_nadh", type="string", length=200, nullable=true)
     */
    private $loc1demijourneeNadh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1journee_nadh", type="string", length=200, nullable=true)
     */
    private $loc1journeeNadh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_1mois_nadh", type="string", length=200, nullable=true)
     */
    private $loc1moisNadh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_caisse_1demijournee", type="string", length=200, nullable=true)
     */
    private $locCaisse1demijournee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_caisse_1journee", type="string", length=200, nullable=true)
     */
    private $locCaisse1journee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_reunion_1demijournee", type="string", length=200, nullable=true)
     */
    private $locReunion1demijournee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loc_reunion_1journee", type="string", length=200, nullable=true)
     */
    private $locReunion1journee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Facturation", inversedBy="idTarif")
     * @ORM\JoinTable(name="coute",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_tarif", referencedColumnName="id_tarif")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_facturation", referencedColumnName="id_facturation")
     *   }
     * )
     */
    private $idFacturation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFacturation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdTarif(): ?int
    {
        return $this->idTarif;
    }

    public function getBureau1mois(): ?string
    {
        return $this->bureau1mois;
    }

    public function setBureau1mois(?string $bureau1mois): self
    {
        $this->bureau1mois = $bureau1mois;

        return $this;
    }

    public function getAdhesion(): ?string
    {
        return $this->adhesion;
    }

    public function setAdhesion(?string $adhesion): self
    {
        $this->adhesion = $adhesion;

        return $this;
    }

    public function getJournee1Gratuite(): ?string
    {
        return $this->journee1Gratuite;
    }

    public function setJournee1Gratuite(?string $journee1Gratuite): self
    {
        $this->journee1Gratuite = $journee1Gratuite;

        return $this;
    }

    public function getLoc1heureAdh(): ?string
    {
        return $this->loc1heureAdh;
    }

    public function setLoc1heureAdh(?string $loc1heureAdh): self
    {
        $this->loc1heureAdh = $loc1heureAdh;

        return $this;
    }

    public function getLoc1demijourneeAdh(): ?string
    {
        return $this->loc1demijourneeAdh;
    }

    public function setLoc1demijourneeAdh(?string $loc1demijourneeAdh): self
    {
        $this->loc1demijourneeAdh = $loc1demijourneeAdh;

        return $this;
    }

    public function getLoc1journeeAdh(): ?string
    {
        return $this->loc1journeeAdh;
    }

    public function setLoc1journeeAdh(?string $loc1journeeAdh): self
    {
        $this->loc1journeeAdh = $loc1journeeAdh;

        return $this;
    }

    public function getLoc1moisAdh(): ?string
    {
        return $this->loc1moisAdh;
    }

    public function setLoc1moisAdh(?string $loc1moisAdh): self
    {
        $this->loc1moisAdh = $loc1moisAdh;

        return $this;
    }

    public function getLoc1heureNadh(): ?string
    {
        return $this->loc1heureNadh;
    }

    public function setLoc1heureNadh(?string $loc1heureNadh): self
    {
        $this->loc1heureNadh = $loc1heureNadh;

        return $this;
    }

    public function getLoc1demijourneeNadh(): ?string
    {
        return $this->loc1demijourneeNadh;
    }

    public function setLoc1demijourneeNadh(?string $loc1demijourneeNadh): self
    {
        $this->loc1demijourneeNadh = $loc1demijourneeNadh;

        return $this;
    }

    public function getLoc1journeeNadh(): ?string
    {
        return $this->loc1journeeNadh;
    }

    public function setLoc1journeeNadh(?string $loc1journeeNadh): self
    {
        $this->loc1journeeNadh = $loc1journeeNadh;

        return $this;
    }

    public function getLoc1moisNadh(): ?string
    {
        return $this->loc1moisNadh;
    }

    public function setLoc1moisNadh(?string $loc1moisNadh): self
    {
        $this->loc1moisNadh = $loc1moisNadh;

        return $this;
    }

    public function getLocCaisse1demijournee(): ?string
    {
        return $this->locCaisse1demijournee;
    }

    public function setLocCaisse1demijournee(?string $locCaisse1demijournee): self
    {
        $this->locCaisse1demijournee = $locCaisse1demijournee;

        return $this;
    }

    public function getLocCaisse1journee(): ?string
    {
        return $this->locCaisse1journee;
    }

    public function setLocCaisse1journee(?string $locCaisse1journee): self
    {
        $this->locCaisse1journee = $locCaisse1journee;

        return $this;
    }

    public function getLocReunion1demijournee(): ?string
    {
        return $this->locReunion1demijournee;
    }

    public function setLocReunion1demijournee(?string $locReunion1demijournee): self
    {
        $this->locReunion1demijournee = $locReunion1demijournee;

        return $this;
    }

    public function getLocReunion1journee(): ?string
    {
        return $this->locReunion1journee;
    }

    public function setLocReunion1journee(?string $locReunion1journee): self
    {
        $this->locReunion1journee = $locReunion1journee;

        return $this;
    }

    /**
     * @return Collection|Facturation[]
     */
    public function getIdFacturation(): Collection
    {
        return $this->idFacturation;
    }

    public function addIdFacturation(Facturation $idFacturation): self
    {
        if (!$this->idFacturation->contains($idFacturation)) {
            $this->idFacturation[] = $idFacturation;
        }

        return $this;
    }

    public function removeIdFacturation(Facturation $idFacturation): self
    {
        if ($this->idFacturation->contains($idFacturation)) {
            $this->idFacturation->removeElement($idFacturation);
        }

        return $this;
    }

}
