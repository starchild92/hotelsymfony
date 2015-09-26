<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Compensacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LI\Bundle\HotelBundle\Entity\CompensacionRepository")
 */
class Compensacion
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
     * @var float
     *
     * @ORM\Column(name="porcentaje", type="float")
     * @Assert\GreaterThan(
     *     value = -1,
     *     message = "Debe ser positivo positivo mayor igual a cero."
     * )
     * @Assert\NotBlank()
     */
    private $porcentaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="de_dias", type="integer")
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo positivo mayor que cero."
     * )
     * @Assert\NotBlank()
     */
    private $deDias;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_dias", type="integer")
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo positivo mayor que cero."
     * )
     * @Assert\NotBlank()
     */
    private $aDias;

    /**
     * @var integer
     *
     * @ORM\Column(name="de_horas", type="integer")
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo positivo mayor que cero."
     * )
     * @Assert\NotBlank()
     */
    private $deHoras;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_horas", type="integer")
     * @Assert\GreaterThan(
     *     value = 0,
     *     message = "Debe ser positivo positivo mayor que cero."
     * )
     * @Assert\NotBlank()
     */
    private $aHoras;


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
     * Set porcentaje
     *
     * @param float $porcentaje
     * @return Compensacion
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return float 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set deDias
     *
     * @param integer $deDias
     * @return Compensacion
     */
    public function setDeDias($deDias)
    {
        $this->deDias = $deDias;

        return $this;
    }

    /**
     * Get deDias
     *
     * @return integer 
     */
    public function getDeDias()
    {
        return $this->deDias;
    }

    /**
     * Set aDias
     *
     * @param integer $aDias
     * @return Compensacion
     */
    public function setADias($aDias)
    {
        $this->aDias = $aDias;

        return $this;
    }

    /**
     * Get aDias
     *
     * @return integer 
     */
    public function getADias()
    {
        return $this->aDias;
    }

    /**
     * Set deHoras
     *
     * @param integer $deHoras
     * @return Compensacion
     */
    public function setDeHoras($deHoras)
    {
        $this->deHoras = $deHoras;

        return $this;
    }

    /**
     * Get deHoras
     *
     * @return integer 
     */
    public function getDeHoras()
    {
        return $this->deHoras;
    }

    /**
     * Set aHoras
     *
     * @param integer $aHoras
     * @return Compensacion
     */
    public function setAHoras($aHoras)
    {
        $this->aHoras = $aHoras;

        return $this;
    }

    /**
     * Get aHoras
     *
     * @return integer 
     */
    public function getAHoras()
    {
        return $this->aHoras;
    }
}
