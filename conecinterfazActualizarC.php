<?php
include 'claseRegistrarCliente.php';
$clientes = new registrarClie();

$clientes->idCliente = $_POST["idCliente"];
$clientes->nombre = $_POST["validacion1"];
$clientes->apellido_p = $_POST["validacion2"];
$clientes->apellido_m = $_POST["validacion3"];
$clientes->domicilio = $_POST["validacion4"];
$clientes->telefono = $_POST["validacion5"];
$clientes->pais = $_POST["validacion6"];
$clientes->ciudad = $_POST["validacion7"];
$clientes->codigo_p = $_POST["validacion8"];
$clientes->rfc = $_POST["validacion9"];
$clientes->factura = $_POST["facturacion"];
echo $clientes->idCliente;


echo $clientes->nombre;
echo $clientes->apellido_p;
echo $clientes->apellido_m;
echo $clientes->domicilio;
echo $clientes->telefono;
echo $clientes->pais;
echo $clientes->ciudad;
echo $clientes->codigo_p;
echo $clientes->rfc;
echo $clientes->factura;



$clientes->actualizarClientes($clientes);
header("Location:editarCliente.php")

?>