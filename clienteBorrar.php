<?php
include 'conexion.php';
$idCliente = $_POST['elimina'];

$conexion = new Conexion (SERVIDOR,USUARIO,PASS,DB);

$sentenciaSQL ="SELECT * FROM clientes WHERE idCliente='".$idCliente."'";
$result = $conexion->query($sentenciaSQL);
$resultado = $result->fetch_array(MYSQLI_ASSOC);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<html lang="es">
	<title>Eliminar Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/eliminarCliente.css">
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

<table   border=2 id="tablados">
    <tr><td>No cliente </td>
    <td>Nombre</td>
    <td>Apellido Paterno</td>
    <td>Apellido Materno</td>
    <td>Domicilio</td>
    <td>Telefono</td>
    <td>Pais</td>
    <td>Ciudad</td>
    <td>Codigo Postal</td>
    <td>RFC</td>
    <td>Factura</td>
    </tr>
    
    <?php 
        echo "
         <tr>
            <td>".$resultado['idCliente']."</td>
            <td>".$resultado['nombre']."</td>
            <td>".$resultado['apellido_p']."</td>
            <td>".$resultado['apellido_m']."</td>
            <td>".$resultado['domicilio']."</td>
            <td>".$resultado['telefono']."</td>
            <td>".$resultado['pais']."</td>
            <td>".$resultado['ciudad']."</td>
            <td>".$resultado['codigo_p']."</td>
            <td>".$resultado['rfc']."</td>
            <td>".$resultado['factura']."</td>
        </tr>
            ";
        ?>
  </table><br><br>
<form name="borrar" method="post" action="conectBorrarC.php">
  <?php 
echo'
<input type="hidden" name="eliminar" value="'.$resultado['idCliente'].'">';
?>
<input type="submit" name="boton" id="botoneliminar"value="Eliminar Registro">
</form>




</body>
</html>