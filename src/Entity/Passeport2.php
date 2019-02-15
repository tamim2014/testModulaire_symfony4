<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Passeport2Repository")
 */
class Passeport2
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $NIN;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $dossier_expedie;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_expedie;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $passeport_livre;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_livraison;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $passeport_arrive;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_arrive;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_export;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Observation", inversedBy="passeport")
     * @ORM\JoinColumn(nullable=false)
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lot", inversedBy="passeport")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lot;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNIN(): ?string
    {
        return $this->NIN;
    }

    public function setNIN(?string $NIN): self
    {
        $this->NIN = $NIN;

        return $this;
    }

    public function getDossierExpedie(): ?string
    {
        return $this->dossier_expedie;
    }

    public function setDossierExpedie(?string $dossier_expedie): self
    {
        $this->dossier_expedie = $dossier_expedie;

        return $this;
    }

    public function getDateExpedie(): ?\DateTimeInterface
    {
        return $this->date_expedie;
    }

    public function setDateExpedie(?\DateTimeInterface $date_expedie): self
    {
        $this->date_expedie = $date_expedie;

        return $this;
    }

    public function getPasseportLivre(): ?string
    {
        return $this->passeport_livre;
    }

    public function setPasseportLivre(?string $passeport_livre): self
    {
        $this->passeport_livre = $passeport_livre;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->date_livraison;
    }

    public function setDateLivraison(?\DateTimeInterface $date_livraison): self
    {
        $this->date_livraison = $date_livraison;

        return $this;
    }

    public function getPasseportArrive(): ?string
    {
        return $this->passeport_arrive;
    }

    public function setPasseportArrive(?string $passeport_arrive): self
    {
        $this->passeport_arrive = $passeport_arrive;

        return $this;
    }

    public function getDateArrive(): ?\DateTimeInterface
    {
        return $this->date_arrive;
    }

    public function setDateArrive(?\DateTimeInterface $date_arrive): self
    {
        $this->date_arrive = $date_arrive;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateExport(): ?\DateTimeInterface
    {
        return $this->date_export;
    }

    public function setDateExport(?\DateTimeInterface $date_export): self
    {
        $this->date_export = $date_export;

        return $this;
    }

    public function getObservation(): ?Observation
    {
        return $this->observation;
    }

    public function setObservation(?Observation $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getLot(): ?Lot
    {
        return $this->lot;
    }

    public function setLot(?Lot $lot): self
    {
        $this->lot = $lot;

        return $this;
    }
}
