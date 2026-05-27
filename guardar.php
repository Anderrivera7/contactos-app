<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

mysqli_query($conexion,
"INSERT INTO personas(nombre,telefono)
VALUES('$nombre','$telefono')");

header("Location:index.php");
?>