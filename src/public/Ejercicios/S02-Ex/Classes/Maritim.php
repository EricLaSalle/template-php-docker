<?php

namespace Classes;

class Maritim extends Vehicle
{
    private $esloraTotal;
    private $esloraFlotacio;
    private $numHelix;

    //Constructor
    public function __construct($matricula, $potencia, $velocitatMitjana, $esloraTotal, $esloraFlotacio, $numHelix)
    {
        parent::__construct($matricula, $potencia, $velocitatMitjana);
        $this->esloraTotal = $esloraTotal;
        $this->esloraFlotacio = $esloraFlotacio;
        $this->numHelix = $numHelix;
    }

    public function calcularPreu($esloraTotal, $potencia)
    {
        return 2500 * $esloraTotal * $potencia;
    }

    // Getters i Setters
    public function getEsloraTotal()
    {
        return $this->esloraTotal;
    }
    public function setEsloraTotal($esloraTotal)
    {
        $this->esloraTotal = $esloraTotal;
    }
    public function getEsloraFlotacio()
    {
        return $this->esloraFlotacio;
    }
    public function setEsloraFlotacio($esloraFlotacio)
    {
        $this->esloraFlotacio = $esloraFlotacio;
    }
    public function getNumHelix()
    {
        return $this->numHelix;
    }
    public function setNumHelix($numHelix)
    {
        $this->numHelix = $numHelix;
    }
}
