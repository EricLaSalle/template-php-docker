<?php

// ------------------------------
// Classe Llibre
// ------------------------------
class Llibre
{
    private $titol;
    private $autor;
    private $any;
    private $pagines;

    // Mètodes per establir els valors
    public function setTitol($t)
    {
        $this->titol = $t;
    }
    public function setAutor($a)
    {
        $this->autor = $a;
    }
    public function setAny($y)
    {
        $this->any = $y;
    }
    public function setPagines($p)
    {
        $this->pagines = $p;
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

// ------------------------------
// Rebre dades del formulari
// ------------------------------
$titol = $_POST["titol"] ?? "";
$autor = $_POST["autor"] ?? "";
$any = $_POST["any"] ?? "";
$pagines = $_POST["pagines"] ?? "";

// ------------------------------
// Validacions
// ------------------------------

// Comprovar que tots els camps estiguin plens
if (empty($titol) || empty($autor) || empty($any) || empty($pagines)) {
    echo "Tots els camps són obligatoris.<br>";
    echo '<a href="index.html">Tornar a introduir el llibre</a>';
    exit;
}

// Comprovar que any i pagines siguin numèrics
if (!is_numeric($any) || !is_numeric($pagines)) {
    echo "L'any i el nombre de pàgines han de ser valors numèrics.<br>";
    echo '<a href="index.html">Tornar a introduir el llibre</a>';
    exit;
}

// ------------------------------
// Crear una instància de Llibre
// ------------------------------
$llibre = new Llibre();
$llibre->setTitol($titol);
$llibre->setAutor($autor);
$llibre->setAny($any);
$llibre->setPagines($pagines);

// ------------------------------
// Mostrar resum del llibre
// ------------------------------
echo "<h2>Resum del llibre:</h2>";
echo "Títol: " . $llibre->getTitol() . "<br>";
echo "Autor: " . $llibre->getAutor() . "<br>";
echo "Any de publicació: " . $llibre->getAny() . "<br>";
echo "Nombre de pàgines: " . $llibre->getPagines() . "<br>";
