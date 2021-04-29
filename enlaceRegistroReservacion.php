<html>
<head>
	<title>Enlace a registrar reservacion</title>
	     <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/enlaceRegistroReservacion.css">
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
		     	  Buscar numero de cliente
		     </nav>
	</header>
  <form name="formulario" method="post" action="../SistemaHotel/RegistrarReservacion.php">
	<section id="elementos">
		<p>No de cliente: <input type="text" placeholder="Escriba el numero de cliente" name="validacion1"size=25></p>
	</section>
	<section id="botones">
    <input type="button" value="Buscar" onclick="registroReservacion()">
		
		
	</section>
</form>
</body>
</html>