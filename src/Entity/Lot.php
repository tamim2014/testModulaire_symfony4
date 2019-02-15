<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LotRepository")
 */
class Lot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Passeport2", mappedBy="lot")
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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

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
            $passeport->setLot($this);
        }

        return $this;
    }

    public function removePasseport(Passeport2 $passeport): self
    {
        if ($this->passeport->contains($passeport)) {
            $this->passeport->removeElement($passeport);
            // set the owning side to null (unless already changed)
            if ($passeport->getLot() === $this) {
                $passeport->setLot(null);
            }
        }

        return $this;
    }
}
