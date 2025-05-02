<?php
include 'db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
$categoria = $_POST['categoria'];
$imagenUrl = $_POST['imagenUrl'];

$sql = "UPDATE lugares_turisticos SET 
        nombre='$nombre',
        descripcion='$descripcion',
        ubicacion='$ubicacion',
        categoria='$categoria',
        imagenUrl='$imagenUrl'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Lugar actualizado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
