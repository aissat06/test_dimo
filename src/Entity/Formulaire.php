<?php

namespace App\Entity;

use App\Repository\FormulaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormulaireRepository::class)
 */
class Formulaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomCF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseCF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneCF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailCF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeB;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $anneeC;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCF(): ?string
    {
        return $this->nomCF;
    }

    public function setNomCF(string $nomCF): self
    {
        $this->nomCF = $nomCF;

        return $this;
    }

    public function getPrenomCF(): ?string
    {
        return $this->prenomCF;
    }

    public function setPrenomCF(string $prenomCF): self
    {
        $this->prenomCF = $prenomCF;

        return $this;
    }

    public function getAdresseCF(): ?string
    {
        return $this->adresseCF;
    }

    public function setAdresseCF(string $adresseCF): self
    {
        $this->adresseCF = $adresseCF;

        return $this;
    }

    public function getTelephoneCF(): ?string
    {
        return $this->telephoneCF;
    }

    public function setTelephoneCF(string $telephoneCF): self
    {
        $this->telephoneCF = $telephoneCF;

        return $this;
    }

    public function getEmailCF(): ?string
    {
        return $this->emailCF;
    }

    public function setEmailCF(string $emailCF): self
    {
        $this->emailCF = $emailCF;

        return $this;
    }

    public function getTypeB(): ?string
    {
        return $this->typeB;
    }

    public function setTypeB(string $typeB): self
    {
        $this->typeB = $typeB;

        return $this;
    }

    public function getAnneeC(): ?string
    {
        return $this->anneeC;
    }

    public function setAnneeC(string $anneeC): self
    {
        $this->anneeC = $anneeC;

        return $this;
    }
}
