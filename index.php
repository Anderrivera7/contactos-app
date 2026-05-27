<?php
include("conexion.php");

$resultado = mysqli_query($conexion,"SELECT * FROM personas");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contactos</title>
</head>
<body>

<h1>Lista de Contactos</h1>

<form action="guardar.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <button type="submit">Guardar</button>
</form>

<hr>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Teléfono</th>
</tr>

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>