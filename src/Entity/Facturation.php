<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Facturation
 *
 * @ORM\Table(name="facturation")
 * @ORM\Entity
 */
class Facturation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_facturation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturation;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facturation", type="date", nullable=false)
     */
    private $dateFacturation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payer_avant_le", type="date", nullable=false)
     */
    private $payerAvantLe;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=200, nullable=false)
     */
    private $designation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adhesion", type="string", length=200, nullable=true)
     */
    private $adhesion;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=200, nullable=false)
     */
    private $quantite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ttc", type="string", length=200, nullable=true)
     */
    private $montantTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ttc", type="string", length=200, nullable=true)
     */
    private $totalTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="espace_facturation", type="text", length=65535, nullable=true)
     */
    private $espaceFacturation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tarif", mappedBy="idFacturation")
     */
    private $idTarif;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTarif = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdFacturation(){ return $this->idFacturation; }

    public function getDateFacturation(): ?\DateTimeInterface
    {
        return $this->dateFacturation;
    }

    public function setDateFacturation(\DateTimeInterface $dateFacturation): self
    {
        $this->dateFacturation = $dateFacturation;

        return $this;
    }

    public function getPayerAvantLe(): ?\DateTimeInterface
    {
        return $this->payerAvantLe;
    }

    public function setPayerAvantLe(\DateTimeInterface $payerAvantLe): self
    {
        $this->payerAvantLe = $payerAvantLe;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

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

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getMontantTtc(): ?string
    {
        return $this->montantTtc;
    }

    public function setMontantTtc(?string $montantTtc): self
    {
        $this->montantTtc = $montantTtc;

        return $this;
    }

    public function getTotalTtc(): ?string
    {
        return $this->totalTtc;
    }

    public function setTotalTtc(?string $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    public function getEspaceFacturation(): ?string
    {
        return $this->espaceFacturation;
    }

    public function setEspaceFacturation(?string $espaceFacturation): self
    {
        $this->espaceFacturation = $espaceFacturation;

        return $this;
    }

    /**
     * @return Collection|Tarif[]
     */
    public function getIdTarif(): Collection
    {
        return $this->idTarif;
    }

    public function addIdTarif(Tarif $idTarif): self
    {
        if (!$this->idTarif->contains($idTarif)) {
            $this->idTarif[] = $idTarif;
            $idTarif->addIdFacturation($this);
        }

        return $this;
    }

    public function removeIdTarif(Tarif $idTarif): self
    {
        if ($this->idTarif->contains($idTarif)) {
            $this->idTarif->removeElement($idTarif);
            $idTarif->removeIdFacturation($this);
        }

        return $this;
    }

}
