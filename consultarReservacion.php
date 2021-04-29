<?php
include 'conexion.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<html lang="es">
	<title>Consultar Reservacion</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/consultarReservacion.css">
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
     	    <nav>
     	    	Consultar Reservacion
     	    </nav>
     </header>
     <form name="formulario" method="post" action="">
<section id="consultar">
	<p>No.de Reservacion que desea consultar? <input type="text" placeholder="Numero de reservacion" name="validacion1"size="25"></p>
	<p id="btnConsultar"><input type="button" value="Consultar Reservacion" onClick="consultarReservacion()"></p>
<table border=2 id="tabla">
    <tr>
        <td><strong>Numero de reservacion</strong></td>
        <td><strong>Hora de entrada</strong></td>
        <td><strong>Hora de salida</strong></td>
        <td><strong>Fecha de Inicio</strong></td>
        <td><strong>Fecha final</strong></td>
        <td><strong>Numero de Habitacion</strong></td>
        <td><strong>Forma de pago</strong></td>
        <td><strong>Factura electronica</strong></td>

</tr>


<?php
$conexion =new conexion(SERVIDOR,USUARIO,PASS,DB);
$sentenciaSQL="SELECT *FROM reservaciones";
$result = $conexion->query($sentenciaSQL);
while ($reservaciones= $result->fetch_array(MYSQLI_ASSOC)) 
{
  echo "<tr>";
  echo "<td>".$reservaciones["num_reservacion"]."</td>";
  echo "<td>".$reservaciones["hora_entrada"]."</td>";
  echo "<td>".$reservaciones["hora_salida"]."</td>";
  echo "<td>".$reservaciones["fecha_i"]."</td>";
  echo "<td>".$reservaciones["fecha_f"]."</td>";
  echo "<td>".$reservaciones["num_habitacion"]."</td>";
  echo "<td>".$reservaciones["forma_pago"]."</td>";
  echo "<td>".$reservaciones["factura"]."</td>";
  echo "<tr>";
}

?>

</table>



</section>
</form>
</body>
</html>