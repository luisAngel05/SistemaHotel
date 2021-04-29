<?php
include 'conexion.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<html lang="es">
	<title>Consultar Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/consultarCliente.css">
	<link rel="stylesheet" type="text/css" href="css/registrarCliente.css"><link rel="stylesheet" type="text/css" href="css/styles.css">
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
		     	   Consultar  cliente
		     </nav>
	</header>
	<form name="formulario" method="post" action="">
<section id="consultar">
	<p>No.de Cliente que desea consultar? <input type="text" placeholder="Numero de Cliente" name="validacion1" size="25"></p>
	<p id="btnConsultar"><input type="button" value="Consultar Cliente" onclick="consultarCliente()"></p>
	<table   border=2 id="tabla">
		<tr>
			 <td><strong>idCliente</strong></td>
		    <td><strong>Nombre</strong></td>
		    <td><strong>Apellido Paterno</strong></td>
		    <td><strong>Apellido Materno</strong></td>
		    <td><strong>Domicilio</strong></td>
		    <td><strong>Telefono</strong></td>
		    <td><strong>Pais</strong></td>
		    <td><strong>Ciudad</strong></td>
		    <td><strong>Codigo Postal</strong></td>
		    <td><strong>RFC</strong></td>
		     <td><strong>Factura</strong></td>
		</tr>
		
		
		<?php
    $conexion =new conexion(SERVIDOR,USUARIO,PASS,DB);
    
    $sentenciaSQL="SELECT *FROM clientes";
$result = $conexion->query($sentenciaSQL);
while ($clientes= $result->fetch_array(MYSQLI_ASSOC)) 
{
	echo "<tr>";
	echo "<td>".$clientes["idCliente"]."</td>";
	echo "<td>".$clientes["nombre"]."</td>";
	echo "<td>".$clientes["apellido_p"]."</td>";
	echo "<td>".$clientes["apellido_m"]."</td>";
	echo "<td>".$clientes["domicilio"]."</td>";
	echo "<td>".$clientes["telefono"]."</td>";
	echo "<td>".$clientes["pais"]."</td>";
	echo "<td>".$clientes["ciudad"]."</td>";
	echo "<td>".$clientes["codigo_p"]."</td>";
	echo "<td>".$clientes["rfc"]."</td>";
	echo "<td>".$clientes["factura"]."</td>";
	echo "<tr>";
}

?>
		
	</table>
</section>
</form>
</body>
</html>