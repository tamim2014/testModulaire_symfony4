<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ObservationRepository")
 */
class Observation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Passeport2", mappedBy="observation")
     */
    private $passeport;

    public function __construct()
    {
        $this->passeport = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection|Passeport2[]
     */
    public function getPasseport(): Collection
    {
        return $this->passeport;
    }

    public function addPasseport(Passeport2 $passeport): self
    {
        if (!$this->passeport->contains($passeport)) {
            $this->passeport[] = $passeport;
            $passeport->setObservation($this);
        }

        return $this;
    }

    public function removePasseport(Passeport2 $passeport): self
    {
        if ($this->passeport->contains($passeport)) {
            $this->passeport->removeElement($passeport);
            // set the owning side to null (unless already changed)
            if ($passeport->getObservation() === $this) {
                $passeport->setObservation(null);
            }
        }

        return $this;
    }
}
