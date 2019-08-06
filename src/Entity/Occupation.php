<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupation
 *
 * @ORM\Table(name="occupation")
 * @ORM\Entity
 */
class Occupation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_occupation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOccupation;

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=200, nullable=false)
     */
    private $occupation;

    public function getIdOccupation(): ?int
    {
        return $this->idOccupation;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }


}
