<?php

namespace Classes_S02Ex;

class Vehicle
{
    private $matricula;
    private $potencia;
    private $velocitatMitjana;

    //Constructor
    public function __construct($matricula, $potencia, $velocitatMitjana)
    {
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->velocitatMitjana = $velocitatMitjana;
    }

    public function calcularTemps($distancia)
    {
        return $distancia / $this->velocitatMitjana;
    }

    // Getters i Setters
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }
    public function getVelocitatMitjana()
    {
        return $this->velocitatMitjana;
    }
    public function setVelocitatMitjana($velocitatMitjana)
    {
        $this->velocitatMitjana = $velocitatMitjana;
    }
}
