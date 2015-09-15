<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Llamada
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\LlamadaRepository")
 */
class Llamada
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
     * @ORM\Column(name="tipo", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $tipo;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float")
     * @Assert\Type(
     *     type="float",
     *     message="El valor {{ value }} no es válido."
     * )
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo superior a cero."
     * )
     */
    private $costo;


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
     * Set tipo
     *
     * @param string $tipo
     * @return Llamada
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set costo
     *
     * @param float $costo
     * @return Llamada
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
}
