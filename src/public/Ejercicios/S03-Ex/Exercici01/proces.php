<?php

//Declarar variables i rebre dades del formulari
$nom = $_POST["nom"];
$cognom = $_POST["cognom"];
$correu = $_POST["correu"];
$dataNaixement = new DateTime($_POST["dataNaixement"]);

//VALIDAR DADES

//Validar que tots els camps estiguin plens
if (empty($nom) || empty($cognom) || empty($correu) || empty($dataNaixement)) {
    echo "Tots els camps són obligatoris.";
    echo "<a href='index.html'>Tornar al formulari</a>";
    exit;
}

//Validar que el correu electrònic tingui un format vàlid
if (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
    echo "El correu electrònic no és vàlid.";
    echo "<a href='index.html'>Tornar al formulari</a>";
    exit;
}

//Validar que la data de naixement sigui una data vàlida i que l'usuari sigui major d'edat
$avui = new DateTime();
$edat = $avui->diff($dataNaixement)->y;
if ($edat < 18) {
    echo "Has de ser major d'edat.";
    echo "<a href='index.html'>Tornar al formulari</a>";
    exit;
}

//Si totes les validacions passen, mostrar les dades
echo "<h2>Dades rebudes:</h2>";
echo "Nom: $nom<br>";
echo "Cognom: $cognom<br>";
echo "Correu electrònic: $correu<br>";
echo "Data de naixement: " . $dataNaixement->format('d/m/Y') . "<br>";
echo "Edat: $edat anys<br>";
echo "<a href='index.html'>Tornar al formulari</a>";
