<?php

require_once './Classes/libro.php';

use Classes\Llibre;

// Connexió amb la base de dades
$servername = "localhost";
$username = "root";
$password = "rootpassword";
$dbname = "biblioteca";

// Crear connexió
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprovar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Dades formulari
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

// Inserir dades a la base de dades
try {
    $stmt = $conn->prepare("INSERT INTO libros (titulo, autor, anio_publicacion, num_paginas) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $title, $author, $year, $pages);
    $title = $llibre->getTitol();
    $author = $llibre->getAutor();
    $year = $llibre->getAny();
    $pages = $llibre->getPagines();
    $stmt->execute();
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo "Error en inserir dades: " . $e->getMessage();
    exit;
}

// Mostrar resum del llibre
echo "<h2>Resum del llibre:</h2>";
echo "Títol: " . $llibre->getTitol() . "<br>";
echo "Autor: " . $llibre->getAutor() . "<br>";
echo "Any de publicació: " . $llibre->getAny() . "<br>";
echo "Nombre de pàgines: " . $llibre->getPagines() . "<br>";
