<?php
// src/AppBundle/Entity/ReservaAuto.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservacionAuto")
 */
class ReservaAuto {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @Assert\DateTime() 
     * @ORM\Column(type="date") 
     */
    private $fechaRecogida ;
    
    /**
     * @Assert\DateTime() 
     * @ORM\Column(type="time") 
     */
    private $horaRecogida ;
    
    /**
     * @Assert\DateTime() 
     * @Assert\GreaterThan(propertyPath="fechaRecogida")
     * @ORM\Column(type="date")  
     */
    private $fechaEntrega;
    
    /**
     * @Assert\DateTime() 
     * @ORM\Column(type="time")  
     */
    private $horaEntrega;
    
    /**
     * @ORM\Column(type="string")  
     */
    private $region;
    
    /**
     * @ORM\Column(type="string")  
     */
    private $lugar;
    
    /**
     * @ORM\Column(type="string")  
     */
    private $nombre;
    
    /**
     * @ORM\Column(type="string")  
     */
    private $apellido;
    
    /**
     * @ORM\Column(type="string")  
     */
    private $email;
    
    /**
     * @ORM\Column(type="string")  
     */
    private $aerolinea;
    
    /**
     * @ORM\Column(type="string", nullable=TRUE)  
     */
    private $identidad;
    
    /**
     * @ORM\Column(type="string")  
     */
    private $vuelo;
    
    
    /**
     * @ORM\Column(type="integer", nullable=TRUE)  
     */
    private $conductorExtra;
    
    /**
     * @ORM\Column(type="string", nullable=TRUE)  
     */
    private $codigo;
    
    /**
     * @ORM\Column(type="boolean", nullable=TRUE)  
     */
    private $sillaBebe;
    
    /**
     * @ORM\Column(type="decimal",scale=2, nullable=TRUE)  
     */
    private $costo;
    
    /**
     * @ORM\ManyToOne(targetEntity="Auto",inversedBy="reservas") 
     */
    private $auto;
    
    //=====================Metodos Get y Set=====================
    public function getId()
    {
        return $this->id;
    }
    
    public function setFechaRecogida(\DateTime $fechaRecogida)
    {
        $this->fechaRecogida = $fechaRecogida;
    }
    public function getFechaRecogida()
    {
        return $this->fechaRecogida;
    }
    
    public function setHoraRecogida(\DateTime $horaRecogida)
    {
        $this->horaRecogida = $horaRecogida;
    }
    public function getHoraRecogida()
    {
        return $this->horaRecogida;
    }
    
    public function setFechaEntrega(\DateTime $fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;
    }
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }
    
    public function setHoraEntrega(\DateTime $horaEntrega)
    {
        $this->horaEntrega = $horaEntrega;
    }
    public function getHoraEntrega()
    {
        return $this->horaEntrega;
    }
    
    public function setRegion(string $region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    
    public function setLugar(string $lugar)
    {
        $this->lugar=$lugar;
    }
    public function getlugar()
    {
        return $this->lugar;
    }
    
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function setApellido(string $apellido)
    {
        $this->apellido=$apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setAerolinea(string $licencia)
    {
        $this->aerolinea = $licencia;
    }
    public function getAerolinea()
    {
        return $this->aerolinea;
    }
    
    public function setIdentidad(string $identidad = NULL)
    {
        $this->identidad = $identidad;
    }
    public function getIdentidad()
    {
        return $this->identidad;
    }
    
    public function setVuelo(string $telefono)
    {
        $this->vuelo=$telefono;
    }
    public function getVuelo()
    {
        return $this->vuelo;
    }
    
    public function setConductorExtra(int $conductor=NULL)
    {
        $this->conductorExtra = $conductor;
    }
    public function getConductorExtra()
    {
        return $this->conductorExtra;
    }
    
    public function setSillaBebe(bool $silla=NULL)
    {
        $this->sillaBebe=$silla;
    }
    public function getSillaBebe()
    {
        return $this->sillaBebe;
    }
    
    public function getCodigo()
    {
       return $this->codigo;
    }

    public function setCodigo(string $codigo)
    {
        $this->codigo = $codigo;
    }
    
    public function getCosto()
    {
        return $this->costo;
    }
    
    public function setCosto(float $costo)
    {
        $this->costo = $costo;
    }

    public function setAuto(Auto $auto =NULL)
    {
        $this->auto=$auto;
    }
    public function getAuto()
    {
        return $this->auto;
    }
}
