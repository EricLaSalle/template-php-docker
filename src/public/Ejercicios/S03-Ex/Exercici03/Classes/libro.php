<?php

namespace Classes;

class Llibre
{
    private $titol;
    private $autor;
    private $any;
    private $pagines;

    // Mètodes per establir els valors
    public function setTitol($titol)
    {
        $this->titol = $titol;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setAny($any)
    {
        $this->any = $any;
    }
    public function setPagines($pagines)
    {
        $this->pagines = $pagines;
    }

    // Mètodes per obtenir els valors
    public function getTitol()
    {
        return $this->titol;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getAny()
    {
        return $this->any;
    }
    public function getPagines()
    {
        return $this->pagines;
    }
}
