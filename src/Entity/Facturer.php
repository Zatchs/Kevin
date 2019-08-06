<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturer
 *
 * @ORM\Table(name="facturer", indexes={@ORM\Index(name="facturer_Utilisateur0_FK", columns={"id_personne"})})
 * @ORM\Entity
 */
class Facturer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_facturation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFacturation;

    public function setIdFacturation(int $id){
        $this->idFacturation = $id;
}

    /**
     * @var int
     *
     * @ORM\Column(name="id_personne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPersonne;

    public function __construct(int $idPersonne, int $idFacturation){
        $this->idFacturation = $idFacturation;
        $this->idPersonne     = $idPersonne;
    }

    public function getIdFacturation(): ?int
    {
        return $this->idFacturation;
    }

    public function getIdPersonne(): ?int
    {
        return $this->idPersonne;
    }


}
