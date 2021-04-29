<html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Preparar informacion</title>
	 <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/prepararInformacion.css">
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
		     	 Datos para Facturacion
		     </nav>
	</header>
<section id="registro">
  <form name="formulario" method="post" action="">
	No de Folio: <input type="text" id="No de factura" name="folio"size=20>
	Cliente: <input type="text" id="No de cliente" name="cliente"size=20><br><br>
	 Fecha: <input type"input"  id="uno" placeholder="dd/mm/aa" name="fecha"size="25">
	RFC <input type="text" id="dos" name="rfc"size=20><br><br>
	id cliente: <input type="text" id="tres" name="idCliente"size=20>
	lugar: <input type="text" id="tres" name="lugar"size=20>
	<br><br>
	<table border=2 id="tabla">
<tr>
<td>id Reservaciones</td>
<td>Tipo de habitacion</td>
<td>Precio</td>
<td>Decripcion</td>

</tr>
<tr>
	<td>*</td>
	<td></td>
	<td></td>
	<td></td>
</tr>

</table>
	
</section>
<br>
<section class="costos">
        <p id="subtotal"> SubTotal: <input type="text" size=10></p><br><br>
         Total: <input type="text" size=10><br><br>
         IVA: <input type="text" size=10 ><br><br>
</section>
<section id="botones">
	<strong>
		<input type="button" value="Guardar datos" onclick="prepararInformacion()">
	
	</strong>
</form>
</section>

</body>
</html>