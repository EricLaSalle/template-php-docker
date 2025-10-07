<?php

require_once '/Classes/libro.php';

use Classes\Llibre;

$titol = $_POST["titol"];
$autor = $_POST["autor"];
$any = $_POST["any"];
$pagines = $_POST["pagines"];


if (empty($titol) || empty($autor) || empty($any) || empty($pagines)) {
    echo "Tots els camps són obligatoris.<br>";
    echo '<a href="index.html">Tornar a introduir el llibre</a>';
    exit;
}


if (!is_numeric($any) || !is_numeric($pagines)) {
    echo "L'any i el nombre de pàgines han de ser valors numèrics.<br>";
    echo '<a href="index.html">Tornar a introduir el llibre</a>';
    exit;
}


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
