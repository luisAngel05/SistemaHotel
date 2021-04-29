<?php
include 'claseRegistrarReservacion.php';
$reservaciones = new registrarReserva();
$reservaciones->num_reservacion = $_POST["num_reservacion"];
$reservaciones->hora_entrada = $_POST["validacion1"];
$reservaciones->hora_salida = $_POST["validacion2"];
$reservaciones->fecha_i = $_POST["validacion3"];
$reservaciones->fecha_f = $_POST["validacion4"];
$reservaciones->num_habitacion = $_POST["validacion5"];
$reservaciones->forma_pago = $_POST["lui"];
$reservaciones->factura = $_POST["abc"];

echo $reservaciones->num_reservacion;
echo $reservaciones->hora_entrada;
echo $reservaciones->hora_salida;
echo $reservaciones->fecha_i;
echo $reservaciones->fecha_f;
echo $reservaciones->num_habitacion;
echo $reservaciones->forma_pago;
echo $reservaciones->factura;
$reservaciones->actualizarReservacion($reservaciones);
header("Location:editarReservacion.php")

?>