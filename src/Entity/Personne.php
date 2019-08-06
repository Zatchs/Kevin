<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="Utilisateur_statut_FK", columns={"id_status"})})
 * @ORM\Entity
 */
class Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_personne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersonne;

    public function setIdPersonne(int $id){
        $this->idPersonne = $id;
}

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_rue", type="string", length=200, nullable=false)
     */
    private $numeroRue;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=200, nullable=false)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=200, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=200, nullable=false)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="societe", type="string", length=100, nullable=true)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="code_badge", type="string", length=50, nullable=false)
     */
    private $codeBadge;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="remise_badge", type="date", nullable=true)
     */
    private $remiseBadge;

    /**
     * @var int
     *
     * @ORM\Column(name="id_status", type="integer", nullable=false)
     */
    private $idStatus;

    public function getIdPersonne(): ?int
    {
        return $this->idPersonne;
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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getNumeroRue(): ?string
    {
        return $this->numeroRue;
    }

    public function setNumeroRue(string $numeroRue): self
    {
        $this->numeroRue = $numeroRue;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(?string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getCodeBadge(): ?string
    {
        return $this->codeBadge;
    }

    public function setCodeBadge(string $codeBadge): self
    {
        $this->codeBadge = $codeBadge;

        return $this;
    }

    public function getRemiseBadge(): ?\DateTimeInterface
    {
        return $this->remiseBadge;
    }

    public function setRemiseBadge(?\DateTimeInterface $remiseBadge): self
    {
        $this->remiseBadge = $remiseBadge;

        return $this;
    }

    public function getIdStatus(): ?int
    {
        return $this->idStatus;
    }

    public function setIdStatus(int $idStatus): self
    {
        $this->idStatus = $idStatus;

        return $this;
    }


}
