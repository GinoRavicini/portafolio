<?php

$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "portafolio";

$conn = new mysqli($host, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Opcional: establecer charset
$conn->set_charset("utf8");