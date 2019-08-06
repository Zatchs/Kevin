<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table(name="statut")
 * @ORM\Entity
 */
class Statut
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_status", type="string", length=100, nullable=false)
     */
    private $nomStatus;

    public function getIdStatus(): ?int
    {
        return $this->idStatus;
    }

    public function getNomStatus(): ?string
    {
        return $this->nomStatus;
    }

    public function setNomStatus(string $nomStatus): self
    {
        $this->nomStatus = $nomStatus;

        return $this;
    }


}
