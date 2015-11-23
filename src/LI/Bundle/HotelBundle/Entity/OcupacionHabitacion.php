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
     * @ORM\ManyToOne(targetEntity="CategoriaHabitacion")
     **/
    private $categoriaHabitacion;

    /**
     * @ORM\ManyToOne(targetEntity="TipoHabitacion")
     **/
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

    /**
     * Set categoriaHabitacion
     *
     * @param \LI\Bundle\HotelBundle\Entity\CategoriaHabitacion $categoriaHabitacion
     * @return OcupacionHabitacion
     */
    public function setCategoriaHabitacion(\LI\Bundle\HotelBundle\Entity\CategoriaHabitacion $categoriaHabitacion = null)
    {
        $this->categoriaHabitacion = $categoriaHabitacion;

        return $this;
    }

    /**
     * Get categoriaHabitacion
     *
     * @return \LI\Bundle\HotelBundle\Entity\CategoriaHabitacion 
     */
    public function getCategoriaHabitacion()
    {
        return $this->categoriaHabitacion;
    }

    /**
     * Set tipoHabitacion
     *
     * @param \LI\Bundle\HotelBundle\Entity\TipoHabitacion $tipoHabitacion
     * @return OcupacionHabitacion
     */
    public function setTipoHabitacion(\LI\Bundle\HotelBundle\Entity\TipoHabitacion $tipoHabitacion = null)
    {
        $this->tipoHabitacion = $tipoHabitacion;

        return $this;
    }

    /**
     * Get tipoHabitacion
     *
     * @return \LI\Bundle\HotelBundle\Entity\TipoHabitacion 
     */
    public function getTipoHabitacion()
    {
        return $this->tipoHabitacion;
    }
}
