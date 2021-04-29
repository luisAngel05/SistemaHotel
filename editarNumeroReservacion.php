<?php
include 'conexion.php';
$num_reservacion = $_POST['validacion1'];
$conexion = new conexion(SERVIDOR,USUARIO,PASS,DB);
$sentenciaSQL="SELECT * FROM  reservaciones WHERE num_reservacion='".$num_reservacion."'";
$result= $conexion->query($sentenciaSQL);
$datosReservacion = $result->fetch_array(MYSQLI_ASSOC);


 $consultaSQL ="SELECT * FROM reservaciones";
 $resultado = $conexion->query($consultaSQL);
$reservacion = $resultado->num_rows;
$reservacion = $reservacion + 1;

?>


<html>
<head>
	<meta charset="UTF-8">
	<html lang="es">
	<title>Editar numero de reservaciones</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/editarNumeroReservacion.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
     <script type="text/javascript"src="scriptJS/validaciones.js"></script>
</head>
<body>
	<div id='cssmenu'>
<ul>
    <li><a href='principal.php'>Inicio</a></li>
     
     <li class='active'><a href='#'>Clientes</a>
        <ul>
            <li>
                 <a href='registrarCliente.php'>Registrar Cliente</a>
                 <a href='editarCliente.php'>Editar Cliente</a>
                 <a href='consultarCliente.php'>Consultar Cliente</a>
                 <a href='eliminarCliente.php'>Eliminar Cliente</a>
             </li>
        </ul>


      <li class='active'><a href='#'>Reservaciones</a>
         <ul>
             <li> 
                 <a href='enlaceRegistroReservacion.php'>Registrar reservacion</a>
                 <a href='editarReservacion.php'>Editar reservacion</a>
                 <a href='consultarReservacion.php'>Consultar reservacion</a>
                 <a href='eliminarReservacion.php'>Eliminar reservacion</a>
            </li>
      </ul>

<li class='active'><a href='#'>Habitaciones</a>
      <ul>
          <li>
              <a href='registrarHabitacion.php'>Registrar Habitacion</a>
              <a href="editarHabitacion.php">Editar Habitacion</a>
              <a href="consultarHabitacion.php">Consultar Habitacion</a>
              
          </li>
      </ul>

<li class='active'><a href='#'>Facturacion</a>
         <ul>
     <li><a href='prepararInformacion.php'>Registrar Factura</a>
         <a href='consultarFacturacion.php'>Imprimir Factura</a>

            </li>
      </ul>



</div>
	<header>
		<nav>Editar Numero de Reservacion
		</nav>
	</header>
<form  name="EditarNumReserva" method="post" action="conectInterfazActualizarR.php">
<section id="elementos">
	<p id="uno">No. de cliente: <?php echo $num_reservacion; ?></p>
	<p id="cuatro">Numero de reservacion: <?php echo $reservacion; ?></p>

<?php 
echo'
<input type="hidden" name="num_reservacion" value="'.$num_reservacion.'" >
	<p id="cinco">Hora de entrada: <input type="text" name="validacion1" value="'.$datosReservacion['hora_entrada'].'"size="25"></p>
	<p id="seis">Hora de salida: <input type="text" name="validacion2" value="'.$datosReservacion['hora_salida'].'" size="25"></p>
	<p id="siete">Fecha de inicio: <input type="text" placeholder="DD/MM/AA"  name="validacion3" value="'.$datosReservacion['fecha_i'].'" size="25"></p>
	<p id="ocho">Fecha final: <input type="text" placeholder="DD/MM/AA"  name="validacion4" value="'.$datosReservacion['fecha_f'].'" size="25"></p>
<p>Numero de Habitacion: <input type="text" value="'.$datosReservacion['num_habitacion'].'"  name="validacion5"size="25"></p>
	<p id="9">Forma de pago: <input type="radio" name="lui"value="Tarjeta">Tarjeta de credito 
                           <input type="radio" name="lui"value="efectivo">Efectivo 
                            <input type="radio" name="lui"value="Paypal">Paypal   
                           <input type="radio" name="lui"value="Otro"Otro</p>
	<p>Factura electronica: <input type="radio" name="abc"value="SI">SI  
                          <input type="radio" name="abc"value="NO">NO</p>
</section>
<section id="botones">
	<strong><input type="submit" onClick="editarNumeroReservacion()"value="Guardar Actualizacion">
		</strong>

</section>
';
?>

</form>

</body>
</html>