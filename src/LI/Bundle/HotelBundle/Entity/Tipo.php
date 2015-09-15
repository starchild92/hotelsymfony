<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\TipoRepository")
 */
class Tipo
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
     * @ORM\Column(name="tipo_habitacion", type="string", length=255)
     */
    private $tipoHabitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria_habitacion", type="string", length=255)
     */
    private $categoriaHabitacion;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="espacio_interno", type="text")
     */
    private $espacioInterno;

    /**
     * @var array
     *
     * @ORM\Column(name="servicios", type="array")
     */
    private $servicios;

    /**
     * @var string
     *
     * @ORM\Column(name="bebidas_minibar", type="string", length=255)
     */
    private $bebidasMinibar;


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
     * Set tipoHabitacion
     *
     * @param string $tipoHabitacion
     * @return Tipo
     */
    public function setTipoHabitacion($tipoHabitacion)
    {
        $this->tipoHabitacion = $tipoHabitacion;

        return $this;
    }

    /**
     * Get tipoHabitacion
     *
     * @return string 
     */
    public function getTipoHabitacion()
    {
        return $this->tipoHabitacion;
    }

    /**
     * Set categoriaHabitacion
     *
     * @param string $categoriaHabitacion
     * @return Tipo
     */
    public function setCategoriaHabitacion($categoriaHabitacion)
    {
        $this->categoriaHabitacion = $categoriaHabitacion;

        return $this;
    }

    /**
     * Get categoriaHabitacion
     *
     * @return string 
     */
    public function getCategoriaHabitacion()
    {
        return $this->categoriaHabitacion;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Tipo
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
     * Set espacioInterno
     *
     * @param string $espacioInterno
     * @return Tipo
     */
    public function setEspacioInterno($espacioInterno)
    {
        $this->espacioInterno = $espacioInterno;

        return $this;
    }

    /**
     * Get espacioInterno
     *
     * @return string 
     */
    public function getEspacioInterno()
    {
        return $this->espacioInterno;
    }

    /**
     * Set servicios
     *
     * @param array $servicios
     * @return Tipo
     */
    public function setServicios($servicios)
    {
        $this->servicios = $servicios;

        return $this;
    }

    /**
     * Get servicios
     *
     * @return array 
     */
    public function getServicios()
    {
        return $this->servicios;
    }

    /**
     * Set bebidasMinibar
     *
     * @param string $bebidasMinibar
     * @return Tipo
     */
    public function setBebidasMinibar($bebidasMinibar)
    {
        $this->bebidasMinibar = $bebidasMinibar;

        return $this;
    }

    /**
     * Get bebidasMinibar
     *
     * @return string 
     */
    public function getBebidasMinibar()
    {
        return $this->bebidasMinibar;
    }
}
