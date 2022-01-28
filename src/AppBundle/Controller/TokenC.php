<?php

namespace AppBundle\Controller;

use Symfony\Component\Validator\Constraints as Assert;

class TokenC {
    
    /**
     * @Assert\Type("bool")
     */
    private $economico;
    
    /**
     * @Assert\Type("bool")
     */
    private $medio;
    
    /**
     * @Assert\Type("bool")
     */
    private $for4;
    
    /**
     * @Assert\Type("bool")
     */
    private $suv;
    
    /**
     * @Assert\Type("bool")
     */
    private $e_premium;
    
    /**
     * @Assert\Type("bool")
     */
    private $e_premium_plus;
    
    /**
     * @Assert\Type("bool")
     */
    private $f_lujo;
    
    /**
     * @Assert\Type("bool")
     */
    private $cubacar;
    
    /**
     * @Assert\Type("bool")
     */
    private $havana_autos;
    
    /**
     * @Assert\Type("bool")
     */
    private $rentcar;
    
    /**
     * @Assert\Type("bool")
     */
    private $manual;
    
    /**
     * @Assert\Type("bool")
     */
    private $automatica;
    
    /**
     * @Assert\Type("bool")
     */
    private $pobre;
    
    /**
     * @Assert\Type("bool")
     */
    private $barato;
    
    /**
     * @Assert\Type("bool")
     */
    private $caro;
    
    public function getEconomico()
    {
        return $this->economico;
    }
    
    public function getMedio()
    {
        return $this->medio;
    }
    
    public function getFor4()
    {
        return $this->for4;
    }
    
    public function getSUV()
    {
        return $this->suv;
    }
    
    public function getEPremium()
    {
        return $this->e_premium;
    }
    
    public function getEPremiumPlus()
    {
        return $this->e_premium_plus;
    }
    
    public function getFLujo()
    {
        return $this->f_lujo;
    }
    
    public function getCubacar()
    {
        return $this->cubacar;
    }
    
    public function getHavanautos()
    {
        return $this->havana_autos;
    }
    
    public function getRentacarVIA()
    {
        return $this->rentcar;
    }
    
    public function getManual()
    {
        return $this->manual;
    }
    
    public function getAutomatica()
    {
        return $this->automatica;
    }
    
    public function getPobre()
    {
        return $this->pobre;
    }
    
    public function getBarato()
    {
        return $this->barato;
    }
    
    public function getCaro()
    {
        return $this->caro;
    }
    
    public function setEconomico($economico)
    {
        $this->economico = $economico;
    }
    
    public function setMedio($medio)
    {
        $this->medio = $medio;
    }
    
    public function setFor4($c_standar)
    {
        $this->for4 = $c_standar;
    }
    
    public function setSUV($d_standar)
    {
        $this->suv = $d_standar;
    }
    
    public function setEPremium($e_premium)
    {
        $this->e_premium = $e_premium;
    }
    
    public function setEPremiumPlus($e_premium_plus)
    {
        $this->e_premium_plus = $e_premium_plus;
    }
    
    public function setFLujo($f_lujo)
    {
        $this->f_lujo = $f_lujo;
    }
    
    public function setCubacar($cubacar)
    {
       $this->cubacar = $cubacar;
    }
    
    public function setHavanautos($havana_autos)
    {
       $this->havana_autos = $havana_autos;
    }
    
    public function setRentacarVIA($rentcar)
    {
       $this->rentcar = $rentcar;
    }
    
    public function setManual($manual)
    {
       $this->manual = $manual;
    }
    
    public function setAutomatica($automatica)
    {
        $this->automatica = $automatica;
    }
    
    public function setPobre( $pobre)
    {
       $this->pobre = $pobre;
    }
    
    public function setBarato($barato)
    {
       $this->barato = $barato;
    }
    
    public function setCaro($caro)
    {
        $this->caro = $caro;
    }
    
}