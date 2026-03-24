<?php

require 'conexion.php';

if(isset($_GET['id'])){

$id = intval($_GET['id']);

$sql = "DELETE FROM mensajes WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

}

header("Location: mensajes.php");
exit;