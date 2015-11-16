<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @ORM\ManyToOne(targetEntity="TipoHabitacion", inversedBy="tipo", cascade={"persist"})
     * @ORM\JoinColumn(name="tipohabitacion_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $tipoHabitacion;

    /**
     * @ORM\ManyToOne(targetEntity="CategoriaHabitacion", inversedBy="categoria", cascade={"persist"})
     * @ORM\JoinColumn(name="categoriahabitacion_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $categoriaHabitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="espacio_interno", type="text")
     * @Assert\NotBlank()
     */
    private $espacioInterno;

    /**
     * @ORM\OneToMany(targetEntity="Servicio", mappedBy="tipo", cascade={"persist","remove"}, orphanRemoval=true)
     * @Assert\Valid
     **/
    private $servicios;

    /**
     * @ORM\OneToMany(targetEntity="Bebida", mappedBy="tipoHabitacion", cascade={"persist","remove"}, orphanRemoval=true)
     * @Assert\Valid
     **/
    private $bebidasMinibar;

    public function __construct()
    {
        $this->bebidasMinibar = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * Add bebidasMinibar
     *
     * @param \LI\Bundle\HotelBundle\Entity\Bebida $bebidasMinibar
     * @return Tipo
     */
    public function addBebidasMinibar(\LI\Bundle\HotelBundle\Entity\Bebida $bebidasMinibar)
    {
        $this->bebidasMinibar[] = $bebidasMinibar;

        return $this;
    }

    /**
     * Remove bebidasMinibar
     *
     * @param \LI\Bundle\HotelBundle\Entity\Bebida $bebidasMinibar
     */
    public function removeBebidasMinibar(\LI\Bundle\HotelBundle\Entity\Bebida $bebidasMinibar)
    {
        $this->bebidasMinibar->removeElement($bebidasMinibar);
    }



    /**
     * Add servicios
     *
     * @param \LI\Bundle\HotelBundle\Entity\Servicio $servicios
     * @return Tipo
     */
    public function addServicio(\LI\Bundle\HotelBundle\Entity\Servicio $servicios)
    {
        $this->servicios[] = $servicios;

        return $this;
    }

    /**
     * Remove servicios
     *
     * @param \LI\Bundle\HotelBundle\Entity\Servicio $servicios
     */
    public function removeServicio(\LI\Bundle\HotelBundle\Entity\Servicio $servicios)
    {
        $this->servicios->removeElement($servicios);
    }

    /**
     * Get servicios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServicios()
    {
        return $this->servicios;
    }
}
