<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\ReservaRepository")
 */
class Reserva
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
     * @ORM\Column(name="estado_reserva", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $estadoReserva;

    /**
     * @var string
     *
     * @ORM\Column(name="habitacion", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $habitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $cliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_personas", type="integer")
     * @Assert\Type(
     *     type="integer",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo superior a cero."
     * )
     */
    private $cantidadPersonas;

    /**
     * @var integer
     *
     * @ORM\Column(name="dias_reserva", type="integer")
     * @Assert\Type(
     *     type="integer",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe reservar por al menos 1 día, valores inferiores no son admitidos."
     * )
     */
    private $diasReserva;


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
     * Set estadoReserva
     *
     * @param string $estadoReserva
     * @return Reserva
     */
    public function setEstadoReserva($estadoReserva)
    {
        $this->estadoReserva = $estadoReserva;

        return $this;
    }

    /**
     * Get estadoReserva
     *
     * @return string 
     */
    public function getEstadoReserva()
    {
        return $this->estadoReserva;
    }

    /**
     * Set habitacion
     *
     * @param string $habitacion
     * @return Reserva
     */
    public function setHabitacion($habitacion)
    {
        $this->habitacion = $habitacion;

        return $this;
    }

    /**
     * Get habitacion
     *
     * @return string 
     */
    public function getHabitacion()
    {
        return $this->habitacion;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Reserva
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
     * Set cantidadPersonas
     *
     * @param integer $cantidadPersonas
     * @return Reserva
     */
    public function setCantidadPersonas($cantidadPersonas)
    {
        $this->cantidadPersonas = $cantidadPersonas;

        return $this;
    }

    /**
     * Get cantidadPersonas
     *
     * @return integer 
     */
    public function getCantidadPersonas()
    {
        return $this->cantidadPersonas;
    }

    /**
     * Set diasReserva
     *
     * @param integer $diasReserva
     * @return Reserva
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
}
