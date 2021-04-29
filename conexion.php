<?php
// Se definen unicamente los datos para la conexion de BD y se asigna la BD  a trabajar
define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASS","");
define("DB","hotel");


//Clase que realiza la conexion a la  base de datos
class conexion extends mysqli{
	public function __construct($hostname, $username, $password, $database){
		parent::__construct($hostname, $username, $password, $database);
	
	if (mysqli_connect_error()) {
die('Error de conexion(' .mysqli_connect_errno() .')' .mysqli_connect_errno());
	}
}
}
?>