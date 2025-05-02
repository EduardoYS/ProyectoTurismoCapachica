<?php
include 'db.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
$categoria = $_POST['categoria'];
$imagenUrl = $_POST['imagenUrl'];

$sql = "INSERT INTO lugares_turisticos (nombre, descripcion, ubicacion, categoria, imagenUrl)
        VALUES ('$nombre', '$descripcion', '$ubicacion', '$categoria', '$imagenUrl')";

if ($conn->query($sql) === TRUE) {
    echo "Lugar agregado exitosamente";
} else {
    echo "Error: " . $conn->error;
}
?>
