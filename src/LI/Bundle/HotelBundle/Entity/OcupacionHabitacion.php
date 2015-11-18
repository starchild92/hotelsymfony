<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcupacionHabitacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\OcupacionHabitacionRepository")
 */
class OcupacionHabitacion
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
     * @var \stdClass
     *
     * @ORM\Column(name="categoriaHabitacion", type="object")
     */
    private $categoriaHabitacion;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="tipoHabitacion", type="object")
     */
    private $tipoHabitacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadPersonasHabitacion", type="integer")
     */
    private $cantidadPersonasHabitacion;


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
     * Set categoriaHabitacion
     *
     * @param \stdClass $categoriaHabitacion
     * @return OcupacionHabitacion
     */
    public function setCategoriaHabitacion($categoriaHabitacion)
    {
        $this->categoriaHabitacion = $categoriaHabitacion;

        return $this;
    }

    /**
     * Get categoriaHabitacion
     *
     * @return \stdClass 
     */
    public function getCategoriaHabitacion()
    {
        return $this->categoriaHabitacion;
    }

    /**
     * Set tipoHabitacion
     *
     * @param \stdClass $tipoHabitacion
     * @return OcupacionHabitacion
     */
    public function setTipoHabitacion($tipoHabitacion)
    {
        $this->tipoHabitacion = $tipoHabitacion;

        return $this;
    }

    /**
     * Get tipoHabitacion
     *
     * @return \stdClass 
     */
    public function getTipoHabitacion()
    {
        return $this->tipoHabitacion;
    }

    /**
     * Set cantidadPersonasHabitacion
     *
     * @param integer $cantidadPersonasHabitacion
     * @return OcupacionHabitacion
     */
    public function setCantidadPersonasHabitacion($cantidadPersonasHabitacion)
    {
        $this->cantidadPersonasHabitacion = $cantidadPersonasHabitacion;

        return $this;
    }

    /**
     * Get cantidadPersonasHabitacion
     *
     * @return integer 
     */
    public function getCantidadPersonasHabitacion()
    {
        return $this->cantidadPersonasHabitacion;
    }
}
