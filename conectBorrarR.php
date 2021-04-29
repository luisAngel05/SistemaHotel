<?php
include 'claseRegistrarReservacion.php';
$num_reservacion = $_POST['eliminar'];


$producto = new registrarReserva();
$producto->borrarReservacion($num_reservacion);
header("Location:eliminarReservacion.php")
?>