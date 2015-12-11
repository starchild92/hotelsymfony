<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\FacturaRepository")
 */
class Factura
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
     * @var integer
     *
     * @ORM\Column(name="dias_reserva", type="integer")
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo superior a cero."
     * )
     * @Assert\NotBlank()
     */
    private $diasReserva;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_bebida", type="float")
     * @Assert\Type(
     *     type="float",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\NotBlank()
     */
    private $costoBebida;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_llamada", type="float")
     * @Assert\Type(
     *     type="float",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\NotBlank()
     */
    private $costoLlamada;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_total", type="float")
     * @Assert\Type(
     *     type="float",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo superior a cero."
     * )
     * @Assert\NotBlank()
     */
    private $costoTotal;

    /**
     * @ORM\OneToOne(targetEntity="Reserva", inversedBy="factura")
     * @ORM\JoinColumn(name="reserva_id", referencedColumnName="id")
     */
    private $reserva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     * @Assert\NotBlank()
     */
    private $fecha;


    public function __construct()
    {
        $this->fecha = new \DateTime();
        $this->costoBebida = 0;
        $this->costoLlamada = 0;
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
     * Set diasReserva
     *
     * @param integer $diasReserva
     * @return Factura
     */
    public function setDiasReserva($diasReserva)
    {
        $this->diasReserva = $diasReserva;

        return $this;
    }

    /**
     * Get diasReserva
     *
     * @return integer 
     */
    public function getDiasReserva()
    {
        return $this->diasReserva;
    }

    /**
     * Set costoTotal
     *
     * @param float $costoTotal
     * @return Factura
     */
    public function setCostoTotal($costoTotal)
    {
        $this->costoTotal = $costoTotal;

        return $this;
    }

    /**
     * Get costoTotal
     *
     * @return float 
     */
    public function getCostoTotal()
    {
        return $this->costoTotal;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Factura
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set reserva
     *
     * @param \LI\Bundle\HotelBundle\Entity\Reserva $reserva
     * @return Factura
     */
    public function setReserva(\LI\Bundle\HotelBundle\Entity\Reserva $reserva = null)
    {
        $this->reserva = $reserva;
    
        return $this;
    }

    /**
     * Get reserva
     *
     * @return \LI\Bundle\HotelBundle\Entity\Reserva 
     */
    public function getReserva()
    {
        return $this->reserva;
    }

    /**
     * Set costoBebida
     *
     * @param float $costoBebida
     * @return Factura
     */
    public function setCostoBebida($costoBebida)
    {
        $this->costoBebida = $costoBebida;

        return $this;
    }

    /**
     * Get costoBebida
     *
     * @return float 
     */
    public function getCostoBebida()
    {
        return $this->costoBebida;
    }

    /**
     * Set costoLlamada
     *
     * @param float $costoLlamada
     * @return Factura
     */
    public function setCostoLlamada($costoLlamada)
    {
        $this->costoLlamada = $costoLlamada;

        return $this;
    }

    /**
     * Get costoLlamada
     *
     * @return float 
     */
    public function getCostoLlamada()
    {
        return $this->costoLlamada;
    }
}
