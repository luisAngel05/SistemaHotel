<?php
include 'claseRegistrarCliente.php';
$idCliente = $_POST['eliminar'];


$producto = new registrarClie();
$producto->borrarCliente($idCliente);
header("Location:eliminarCliente.php")
?>