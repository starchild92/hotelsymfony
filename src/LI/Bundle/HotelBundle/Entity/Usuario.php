<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Usuario
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class Usuario extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Su nombre debe tener al menos {{ limit }} letras",
     *      maxMessage = "Su nombre no puede tener {{ limit }} letras"
     * )
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50)
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Su apellido debe tener al menos {{ limit }} letras",
     *      maxMessage = "Su apellido no puede tener {{ limit }} letras"
     * )
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_nac", type="date")
     */
    private $fecha_nac;

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
     * @return Usuario
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
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set fecha_nac
     *
     * @param \DateTime $fechaNac
     * @return Usuario
     */
    public function setFechaNac($fechaNac)
    {
        $this->fecha_nac = $fechaNac;

        return $this;
    }

    /**
     * Get fecha_nac
     *
     * @return \DateTime 
     */
    public function getFechaNac()
    {
        return $this->fecha_nac;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function __toString(){
        return $this->nombre.' '.$this->apellido;
    }
}
