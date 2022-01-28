<?php

namespace AppBundle\Controller;

use Symfony\Component\Validator\Constraints as Assert;

class TokenD {
    
    /**
     * @Assert\Type("bool")
     */
    private $cinco;
    
    /**
     * @Assert\Type("bool")
     */
    private $cuatro;
    
    /**
     * @Assert\Type("bool")
     */
    private $tres;
    
    /**
     * @Assert\Type("bool")
     */
    private $melia;
    
    /**
     * @Assert\Type("bool")
     */
    private $iberostar;
    
    /**
     * @Assert\Type("bool")
     */
    private $rock;
    
    /**
     * @Assert\Type("bool")
     */
    private $blueDiamond;
    
    /**
     * @Assert\Type("bool")
     */
    private $solways;
    
    /**
     * @Assert\Type("bool")
     */
    private $paradisus;
    
    /**
     * @Assert\Type("bool")
     */
    private $bajo;
    
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
    private $alto;
    
    /**
     * @Assert\Type("bool")
     */
    private $lujoso;
    
    /**
     * @Assert\Type("bool")
     */
    private $muycaro;
    
    public function getCinco()
    {
        return $this->cinco;
    }
    
    public function getCuatro()
    {
        return $this->cuatro;
    }
    
    public function getTres()
    {
        return $this->tres;
    }
    
    public function getMelia()
    {
        return $this->melia;
    }
    
    public function getIberostar()
    {
        return $this->iberostar;
    }
    
    public function getRoc()
    {
        return $this->rock;
    }
    
    public function getBlueDiamond()
    {
        return $this->blueDiamond;
    }
    
    public function getSolways()
    {
        return $this->solways;
    }
    
    public function getParadisus()
    {
        return $this->paradisus;
    }
    
    public function getBajo()
    {
        return $this->bajo;
    }
    
    public function getEconomico()
    {
        return $this->economico;
    }
    
    public function getMedio()
    {
        return $this->medio;
    }
    
    public function getAlto()
    {
        return $this->alto;
    }
    
    public function getLujoso()
    {
        return $this->lujoso;
    }
    
    public function getMuycaro()
    {
        return $this->muycaro;
    }
    
    public function setCinco($economico)
    {
        $this->cinco = $economico;
    }
    
    public function setCuatro($medio)
    {
        $this->cuatro = $medio;
    }
    
    public function setTres($c_standar)
    {
        $this->tres = $c_standar;
    }
    
    public function setMelia($d_standar)
    {
        $this->melia = $d_standar;
    }
    
    public function setIberostar($e_premium)
    {
        $this->iberostar = $e_premium;
    }
    
    public function setRoc($e_premium_plus)
    {
        $this->rock = $e_premium_plus;
    }
    
    public function setBlueDiamond($f_lujo)
    {
        $this->blueDiamond = $f_lujo;
    }
    
    public function setSolways($cubacar)
    {
       $this->solways = $cubacar;
    }
    
    public function setParadisus($havana_autos)
    {
       $this->paradisus = $havana_autos;
    }
    
    public function setBajo($rentcar)
    {
       $this->bajo = $rentcar;
    }
    
    public function setMedio($manual)
    {
       $this->medio = $manual;
    }
    
    public function setEconomico($automatica)
    {
        $this->economico = $automatica;
    }
    
    public function setAlto( $pobre)
    {
       $this->alto = $pobre;
    }
    
    public function setLujoso($barato)
    {
       $this->lujoso = $barato;
    }
    
    public function setMuycaro($caro)
    {
        $this->muycaro = $caro;
    }
    
}