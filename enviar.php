<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

echo "<h2>Mensaje recibido</h2>";

echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Mensaje: " . htmlspecialchars($mensaje) . "<br>";

}