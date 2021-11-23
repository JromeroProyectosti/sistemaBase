<?php

namespace App\Entity;

use App\Repository\UsuarioUsuariocategoriaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuarioUsuariocategoriaRepository::class)
 */
class UsuarioUsuariocategoria
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="usuarioUsuariocategorias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    

    /**
     * @ORM\ManyToOne(targetEntity=Cuenta::class, inversedBy="usuarioUsuariocategorias")
     */
    private $cuenta;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
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

}
