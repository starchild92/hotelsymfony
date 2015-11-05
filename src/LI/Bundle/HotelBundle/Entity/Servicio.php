<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\ServicioRepository")
 */
class Servicio
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float")
     */
    private $costo;

   /**
     * @ORM\ManyToOne(targetEntity="Tipo", inversedBy="servicios")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id", onDelete="CASCADE")
     */
   private $tipo;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Servicio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set costo
     *
     * @param float $costo
     * @return Servicio
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return float 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    public function setTipo($tipoid){
        $this->tipo = $tipoid;
        return $this;
    }
}
