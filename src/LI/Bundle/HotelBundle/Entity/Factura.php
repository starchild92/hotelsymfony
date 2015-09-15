<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $diasReserva;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_total", type="float")
     */
    private $costoTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


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
     * Set cliente
     *
     * @param string $cliente
     * @return Factura
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
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
}
