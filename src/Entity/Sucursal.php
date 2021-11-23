<?php

namespace App\Entity;

use App\Repository\SucursalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SucursalRepository::class)
 */
class Sucursal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cuenta::class, inversedBy="sucursals")
     */
    private $cuenta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCuenta(): ?Cuenta
    {
        return $this->cuenta;
    }

    public function setCuenta(?Cuenta $cuenta): self
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    
    public function __toString(){
        return $this->getNombre();
    }

    
}
