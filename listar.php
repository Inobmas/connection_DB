<?php

include("conexion.php");

$consulta = $conexion->query(
    "SELECT * FROM estudiantes"
);

$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<h2>Estudiantes registrados</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Curso</th>
</tr>

<?php foreach($datos as $fila): ?>

<tr>

<td><?= $fila["id"] ?></td>
<td><?= $fila["nombre"] ?></td>
<td><?= $fila["correo"] ?></td>
<td><?= $fila["curso"] ?></td>

</tr>

<?php endforeach; ?>

</table>

<button onclick="window.location.href='index.html'">
    Regresar
</button>