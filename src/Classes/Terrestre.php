<?php

namespace Classes;

class Terrestre extends Vehicle
{
    private $numRodes;
    private $capacitatMaleter;
    private $railsCarretera;

    // Getters i Setters
    public function getNumRodes()
    {
        return $this->numRodes;
    }
    public function setNumRodes($numRodes)
    {
        $this->numRodes = $numRodes;
    }
    public function getCapacitatMaleter()
    {
        return $this->capacitatMaleter;
    }
    public function setCapacitatMaleter($capacitatMaleter)
    {
        $this->capacitatMaleter = $capacitatMaleter;
    }
    public function getRailsCarretera()
    {
        return $this->railsCarretera;
    }
    public function setRailsCarretera($railsCarretera)
    {
        $this->railsCarretera = $railsCarretera;
    }
}
