<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestSaisieRepository")
 */
class TestSaisie
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
    private $test_nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $test_prenom;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $test_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTestNom(): ?string
    {
        return $this->test_nom;
    }

    public function setTestNom(string $test_nom): self
    {
        $this->test_nom = $test_nom;

        return $this;
    }

    public function getTestPrenom(): ?string
    {
        return $this->test_prenom;
    }

    public function setTestPrenom(?string $test_prenom): self
    {
        $this->test_prenom = $test_prenom;

        return $this;
    }

    public function getTestDate(): ?\DateTimeInterface
    {
        return $this->test_date;
    }

    public function setTestDate(?\DateTimeInterface $test_date): self
    {
        $this->test_date = $test_date;

        return $this;
    }
}
