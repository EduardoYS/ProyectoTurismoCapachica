<?php
include 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM lugares_turisticos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Lugar eliminado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
