<?php
include 'claseRegistrarCliente.php';
$nombreCliente=$_POST["validacion1"];    //Se crea una variable para guardar los valores que se tomaran de los nombres de la caja de texto
$apellidoPCliente=$_POST["validacion2"];
$apellidoMCliente=$_POST["validacion3"];
$domicilioCliente=$_POST["validacion4"];
$telefonoCliente=$_POST["validacion5"];
$paisCliente=$_POST["validacion6"];
$ciudadCliente=$_POST["validacion7"];
$codigoPCliente=$_POST["validacion8"];
$rfcCliente=$_POST["validacion9"];
$facturaCliente=$_POST["facturacion"];

$registrarClientes=new registrarClie();
$registrarClientes->registrarCliente($nombreCliente,$apellidoPCliente,$apellidoMCliente,$domicilioCliente,$telefonoCliente,$paisCliente,$ciudadCliente,$codigoPCliente,$rfcCliente,$facturaCliente);
header("Location:principal.php")
?>