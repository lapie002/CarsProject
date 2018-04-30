<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarsCatalogueRepository")
 */
class CarsCatalogue
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $mpg;

    /**
     * @ORM\Column(type="integer")
     */
    private $cylinders;

    /**
     * @ORM\Column(type="float")
     */
    private $displacement;

    /**
     * @ORM\Column(type="float")
     */
    private $horsepower;

    /**
     * @ORM\Column(type="float")
     */
    private $weight;

    /**
     * @ORM\Column(type="float")
     */
    private $acceleration;

    /**
     * @ORM\Column(type="integer")
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getId()
    {
        return $this->id;
    }

    public function getMpg(): ?float
    {
        return $this->mpg;
    }

    public function setMpg(float $mpg): self
    {
        $this->mpg = $mpg;

        return $this;
    }

    public function getCylinders(): ?int
    {
        return $this->cylinders;
    }

    public function setCylinders(int $cylinders): self
    {
        $this->cylinders = $cylinders;

        return $this;
    }

    public function getDisplacement(): ?float
    {
        return $this->displacement;
    }

    public function setDisplacement(float $displacement): self
    {
        $this->displacement = $displacement;

        return $this;
    }

    public function getHorsepower(): ?float
    {
        return $this->horsepower;
    }

    public function setHorsepower(float $horsepower): self
    {
        $this->horsepower = $horsepower;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getAcceleration(): ?float
    {
        return $this->acceleration;
    }

    public function setAcceleration(float $acceleration): self
    {
        $this->acceleration = $acceleration;

        return $this;
    }

    public function getModel(): ?int
    {
        return $this->model;
    }

    public function setModel(int $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
