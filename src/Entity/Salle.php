<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_salle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_salle", type="string", length=200, nullable=false)
     */
    private $nomSalle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entree_salle", type="date", nullable=true)
     */
    private $dateEntreeSalle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_sortie_salle", type="date", nullable=true)
     */
    private $dateSortieSalle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_duree", type="integer", nullable=true)
     */
    private $idDuree;

    public function getIdSalle(): ?int
    {
        return $this->idSalle;
    }

    public function getNomSalle(): ?string
    {
        return $this->nomSalle;
    }

    public function setNomSalle(string $nomSalle): self
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    public function getDateEntreeSalle(): ?\DateTimeInterface
    {
        return $this->dateEntreeSalle;
    }

    public function setDateEntreeSalle(?\DateTimeInterface $dateEntreeSalle): self
    {
        $this->dateEntreeSalle = $dateEntreeSalle;

        return $this;
    }

    public function getDateSortieSalle(): ?\DateTimeInterface
    {
        return $this->dateSortieSalle;
    }

    public function setDateSortieSalle(?\DateTimeInterface $dateSortieSalle): self
    {
        $this->dateSortieSalle = $dateSortieSalle;

        return $this;
    }

    public function getIdDuree(): ?int
    {
        return $this->idDuree;
    }

    public function setIdDuree(?int $idDuree): self
    {
        $this->idDuree = $idDuree;

        return $this;
    }


}
