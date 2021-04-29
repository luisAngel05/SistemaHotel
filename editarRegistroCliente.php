<?php
include 'conexion.php';
$idCliente = $_POST['validacion1'];
$conexion = new conexion(SERVIDOR,USUARIO,PASS,DB);
$sentenciaSQL="SELECT *FROM clientes WHERE idCliente='".$idCliente."'";
$result= $conexion->query($sentenciaSQL);
$datosCliente = $result->fetch_array(MYSQLI_ASSOC);


?>

<html>
<head>
	<meta charset="UTF-8">
	<html lang="es">
	<title>Editar Cliente</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/editarRegistroCliente.css">
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
		     	   Editar Cliente
		     </nav>
	</header>
  
<section id="registro">
  <form name="editarCliente" method="post" action="conecinterfazActualizarC.php">

<?php
echo '
      <input type="hidden" name="idCliente" value="'.$idCliente.'">
	    <P id="N">Nombre(s): <input type="text" placeholder="Escriba su nombre aqui" name="validacion1" value="'.$datosCliente['nombre'].'"size="25"> </P>
	    <P id="AP">Apellido Paterno: <input type="text" placeholder="Escriba su apellido paterno" name="validacion2" value="'.$datosCliente['apellido_p'].'"size="25" ></P>
	    <P id="AP">Apellido Materno: <input type="text" placeholder="Escriba su apellido materno aqui" name="validacion3" value="'.$datosCliente['apellido_m'].'"size="25"></P>
        <P id="D">Domicilio: <input type="text" placeholder="Calle/Numero" name="validacion4" value="'.$datosCliente['domicilio'].'"size="25"></P>
        <P id="T">Telefono:  <input type="text" placeholder="Escriba su telefono aqui" name="validacion5" value="'.$datosCliente['telefono'].'"size="25"></P>
        <p id="P">Pais : <input type="text"  name="validacion6" value="'.$datosCliente['pais'].'"size="25"></p>
          <p  id="Ciudad">Ciudad: <input type="text" name="validacion7" value="'.$datosCliente['ciudad'].'"size="25"></p>
        <P id="CodigoP">Codigo Postal: <input type="text" placeholder="Escriba su Codigo Postal aqui" name="validacion8" value="'.$datosCliente['codigo_p'].'"size="25"></P>
         <p id="RFC">RFC: <input type="text"  name="validacion9" value="'.$datosCliente['rfc'].'"size="25"></p>
         <p>Factura: <input type="radio" name="facturacion" value="SI">SI 
                     <input type="radio" name="facturacion" value="NO">NO</p>

</section>
<section id="botones">
	<strong>

		<input type="button" value="Guardar Actualizacion" onClick="editarClien()">
	
 </strong>
 ';
 ?>
</form>
</section>




</body>
</html>
