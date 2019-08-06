<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Travail
 *
 * @ORM\Table(name="travail", indexes={@ORM\Index(name="travail_salle0_FK", columns={"id_salle"})})
 * @ORM\Entity
 */
class Travail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_personne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPersonne;

    /**
     * @var int
     *
     * @ORM\Column(name="id_salle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSalle;

    public function getIdPersonne(): ?int
    {
        return $this->idPersonne;
    }

    public function getIdSalle(): ?int
    {
        return $this->idSalle;
    }


}
