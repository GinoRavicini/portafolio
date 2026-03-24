<?php

require 'conexion.php';

$sql = "SELECT * FROM mensajes ORDER BY fecha DESC";
$resultado = $conn->query($sql);

?>
<div class="container mt-5">

<h2 class="mb-4 text-center">Mensajes recibidos</h2>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Mensaje</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>

<?php if($resultado->num_rows > 0){ ?>

<?php while($fila = $resultado->fetch_assoc()){ ?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo htmlspecialchars($fila['nombre']); ?></td>
<td><?php echo htmlspecialchars($fila['email']); ?></td>
<td><?php echo htmlspecialchars($fila['mensaje']); ?></td>
<td><?php echo $fila['fecha']; ?></td>

<td>
    <a href="eliminar.php?id=<?php echo $fila['id']; ?>" 
    class="btn btn-danger btn-sm"
    onclick="return confirm('¿Eliminar este mensaje?');">
    Eliminar
    </a>
</td>

</tr>

<?php } ?>

<?php } else { ?>

<tr>
<td colspan="5" class="text-center">No hay mensajes</td>
</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>
