<?php

include("conexion.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$curso = $_POST["curso"];

$sql = "INSERT INTO estudiantes
        (nombre, correo, curso)
        VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->execute([
    $nombre,
    $correo,
    $curso
]);

header("Location: listar.php");

?>