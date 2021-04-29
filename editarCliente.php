<?php
include 'conexion.php';
?>

<html>
<head>
	<meta charset="UTF-8">
	<html lang="es">
	<title>Editar Cliente</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/editarCliente.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script type="text/javascript"src="scriptJS/validaciones.js"></script>
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
		     	   Editar cliente
		     </nav>
	</header>
  <form name="formulario" method="post" action="../SistemaHotel/editarRegistroCliente.php">
<section id="editar">

	<?php
$conexion =new conexion(SERVIDOR,USUARIO,PASS,DB);
$sentenciaSQL="SELECT *FROM clientes";
$result = $conexion->query($sentenciaSQL);

 echo '
<p id="for">Ingrese el numero de cliente: <input type="text" placeholder="Numero de Cliente"name="validacion1" size="25"></p>
 ';




?>
	
  <p id="btnEditar"><input type="submit" onclick="editarRegistroCliente()" value="Editar Cliente"></p>
  

</section>
</form>



</body>
</html>