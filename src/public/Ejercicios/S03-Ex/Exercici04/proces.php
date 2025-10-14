<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificamos que se haya subido un archivo
    if (!isset($_FILES['pujarFitxer']) || $_FILES['pujarFitxer']['error'] != 0) {
        echo "Error: No s'ha pujat cap fitxer o hi ha hagut un error en la pujada.<br>";
        echo '<a href="index.html">Tornar a intentar-ho</a>';
        exit;
    }

    $file = $_FILES['pujarFitxer'];
    $tamanyArxiu = $file['size'];
    $tipusArxiu = $file['type'];
    $nomArxiu = basename($file['name']);
    $tmpName = $file['tmp_name'];

    // Validació de mida (<= 2MB)
    if ($tamanyArxiu > 2000000) {
        echo "El fitxer és massa gran. Màxim 2MB.<br>";
        echo '<a href="index.html">Tornar a pujar un altre fitxer</a>';
        exit;
    }

    // Validació de tipus d’arxiu (només jpg, png, gif)
    $tipusPermesos = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($tipusArxiu, $tipusPermesos)) {
        echo "El fitxer ha de ser de tipus JPG, PNG o GIF.<br>";
        echo '<a href="index.html">Tornar a pujar un altre fitxer</a>';
        exit;
    }

    // Creem la carpeta 'uploads' si no existeix
    $directoriDesti = 'uploads/';
    if (!file_exists($directoriDesti)) {
        mkdir($directoriDesti, 0777, true);
    }

    // Evitem sobrescriure arxius existents
    $rutaFinal = $directoriDesti . time() . "_" . $nomArxiu;

    // Movem l’arxiu des del directori temporal al definitiu
    if (move_uploaded_file($tmpName, $rutaFinal)) {
        echo "✅ El fitxer <strong>$nomArxiu</strong> s'ha pujat correctament a la carpeta <strong>uploads/</strong>.<br>";
        echo '<a href="index.html">Pujar un altre fitxer</a>';
    } else {
        echo "❌ Hi ha hagut un error en desar el fitxer.<br>";
        echo '<a href="index.html">Tornar a intentar-ho</a>';
    }
} else {
    echo "Accés no vàlid.";
}
