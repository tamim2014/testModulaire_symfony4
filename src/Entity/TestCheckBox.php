<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestCheckBoxRepository")
 */
class TestCheckBox
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
    private $nom_test2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $cocher;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTest2(): ?string
    {
        return $this->nom_test2;
    }

    public function setNomTest2(string $nom_test2): self
    {
        $this->nom_test2 = $nom_test2;

        return $this;
    }

    public function getCocher(): ?string
    {
        return $this->cocher;
    }

    public function setCocher(?string $cocher): self
    {
       
        $this->cocher = $cocher;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
