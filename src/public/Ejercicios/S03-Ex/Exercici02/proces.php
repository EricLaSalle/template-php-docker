<?php

session_start(); // Necesario para $_SESSION

// Usuario y contraseña predefinidos
$usuari_correcte = "admin";
$contrasenya_correcta = "1234";

// Recibir datos del formulario
$usuari = $_POST["usuari"];
$contrasenya = $_POST["contrasenya"];

// Validar campos
if (empty($usuari) || empty($contrasenya)) {
    echo "Ambos campos son obligatorios.<br>";
    echo '<a href="index.html">Volver a intentarlo</a>';
    exit;
}

// Comprobar usuario y contraseña
if ($usuari === $usuari_correcte && $contrasenya === $contrasenya_correcta) {
    // Guardar un ID de usuario fijo en la sesión
    $_SESSION["user_id"] = 1;

    echo "<h2>Bienvenido, $usuari!</h2>";
    echo "Tu ID de usuario en sesión es: " . $_SESSION["user_id"] . "<br>";
} else {
    echo "Usuario o contraseña incorrectos.<br>";
    echo '<a href="index.html">Volver a intentarlo</a>';
}
