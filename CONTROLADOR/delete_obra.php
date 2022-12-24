<?php
include "../conexion.php";
$id_obra = $_GET['id_obra'];
$conexion->query("DELETE FROM id20053745_teatro_unsa.obra WHERE id_evento = '$id_obra'");
$conexion->query("DELETE FROM id20053745_teatro_unsa.evento WHERE id_evento = '$id_obra'");
echo "<script>
    window.location.href = '../obras.php';
    </script>";
?>