<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bebida
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\BebidaRepository")
 */
class Bebida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_bebida", type="string", length=255)
     * @Assert\Choice(
     *     choices = {"Cerveza", "Vino", "Refresco", "Alcohol"},
     *     message = "Escoga un tipo de bebida válido.")
     */
    private $tipoBebida;

    /**
     * @ORM\ManyToOne(targetEntity="Tipo", inversedBy="bebidasMinibar")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $tipoHabitacion;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     * @Assert\Type(
     *     type="float",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo superior a cero."
     * )
     */
    private $precio;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     * @Assert\Type(
     *     type="integer",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo superior a cero."
     * )
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $marca;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipoBebida
     *
     * @param string $tipoBebida
     * @return Bebida
     */
    public function setTipoBebida($tipoBebida)
    {
        $this->tipoBebida = $tipoBebida;

        return $this;
    }

    /**
     * Get tipoBebida
     *
     * @return string 
     */
    public function getTipoBebida()
    {
        return $this->tipoBebida;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Bebida
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     * @return Bebida
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Bebida
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    public function __toString()
    {
        return $this->tipoBebida;
    }
}
