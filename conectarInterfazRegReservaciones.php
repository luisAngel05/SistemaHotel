<?php
include 'claseRegistrarReservacion.php';
//$numeroReservacion=$_POST["idReservacion"]; //Se crea una variable para guardar los valores que se tomaran de los nombres de la caja de texto
$horaEReservacion=$_POST["validacion1"];
$horaSReservacion=$_POST["validacion2"];
$fechaIReservacion=$_POST["validacion3"];
$fechaFReservacion=$_POST["validacion4"];
$numeroHReservacion=$_POST["habitaciones"];
$tipoPReservacion=$_POST["tipoPago"];
$facturaCliente=$_POST["facturacion"];

$registrarReservacion=new registrarReserva();//nombre de la clase
$registrarReservacion->registrarReservacion($horaEReservacion,$horaSReservacion,$fechaIReservacion,$fechaFReservacion,$numeroHReservacion,$tipoPReservacion,$facturaCliente);
header("Location:enlaceRegistroReservacion.php")
?>