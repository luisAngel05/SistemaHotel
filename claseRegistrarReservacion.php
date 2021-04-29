<?php
include 'conexion.php';

class registrarReserva
{
	//Declaracion de atributos
	public $num_reservacion;
    public $hora_entrada;
	public $hora_salida;
	public $fecha_i;
	public $fecha_f;
	public $num_habitacion;
	public $forma_pago;
	public $factura;
	

	function registrarReservacion($horaEntrada,$horaSalida,$fechaInicio,$fechaFinal,$NHabitacion,$formaPago,$facturar)
{
     try {
$conexion = new conexion(SERVIDOR,USUARIO,PASS,DB);
$consulta=sprintf(
"INSERT INTO reservaciones(
	num_reservacion,
	hora_entrada,
	hora_salida,
    fecha_i,
    fecha_f,
    num_habitacion,
    forma_pago,
    factura)
VALUES(null,'%s','%s','%s','%s','%s','%s','%s')",

$conexion->real_escape_string($horaEntrada),
$conexion->real_escape_string($horaSalida),
$conexion->real_escape_string($fechaInicio),
$conexion->real_escape_string($fechaFinal),
$conexion->real_escape_string($NHabitacion),
$formaPago,
$facturar );


$result =$conexion->query($consulta);// se ejecuta la consulta dentro de la base de datos, y se pued hacer todo dento de el parentesis.
if ($result !==true) {
	$conexion-> rollback();
	$conexion-> close();
	return false;
}
$conexion->close();
return true;
	}

catch (Exception $e) {
	$conexion->rollback();
	$conexion->close();
	return false;
	}
  }
  function actualizarReservacion($reservaciones)
  {
  	$conexion =  new conexion(SERVIDOR,USUARIO,PASS,DB);
  	try {
$sentenciaSQL ="UPDATE reservaciones SET 
hora_entrada ='".$reservaciones->hora_entrada."', 
hora_salida ='".$reservaciones->hora_salida."', 
fecha_i ='".$reservaciones->fecha_i."', 
fecha_f ='".$reservaciones->fecha_f."', 
num_habitacion ='".$reservaciones->num_habitacion."', 
forma_pago ='".$reservaciones->forma_pago."', 
factura ='".$reservaciones->factura."' 
WHERE num_reservacion='".$reservaciones->num_reservacion."'";
	$result = $conexion->query($sentenciaSQL);
			if ($result !== true) {
				$conexion->rollback();
				return false;
			}
			$conexion->close();
			return true;
	
  	} 
  	catch (Exception $e) {
  		$conexion->rollback();
			$conexion->close();
			return true;

  	}
  }

  function borrarReservacion($num_reservacion){
   	$conexion =  new conexion(SERVIDOR,USUARIO,PASS,DB);
		try
		{	
			$sentenciaSQL ="DELETE FROM reservaciones WHERE num_reservacion='".$num_reservacion."'";

			$result = $conexion->query($sentenciaSQL);
			if ($result !== true) {
				$conexion->rollback();
				return false;
			}
			$conexion->close();
			return true;

		}
		catch(Exception $e)
		{
			$conexion->rollback();
			$conexion->close();
			return true;

		}
   }


}




?>