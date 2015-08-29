<?php

namespace LI\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity("mail", message="Esta dirección de correo ya está en uso")
 */
class Usuario
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
     * @ORM\Column(name="cuenta", type="string", length=50)
     */
    private $cuenta = 'Usuario';

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50)
     */
    private $apellido;

    /**
     * @var string $mail
     *
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     * @Assert\Email(
     *     message = "El mail '{{ value }}' no es válido.",
     *     checkMX = true,
     *     checkHost = true
     * )
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=18)
     */
    private $clave;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer")
     * @Assert\Range(
     *      min = 18,
     *      minMessage = "Debes tener {{ limit }} años o más para registrarte",
     * )
     */
    private $edad;

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
     * Set mail
     *
     * @param string $mail
     * @return Usuario
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     * @return Usuario
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }
}
