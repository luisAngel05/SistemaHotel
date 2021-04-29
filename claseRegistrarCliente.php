<?php
include 'conexion.php';
/*Aqui se encuentran todos los atributos y metodos*/


class registrarClie
{
	//Declaracion de atributos
	public $idCliente;
	public $nombre;
    public $apellido_p;
	public $apellido_m;
	public $domicilio;
	public $telefono;
	public $pais;
	public $ciudad;
	public $codigo_p;
	public $rfc;
	public $factura;


	function registrarCliente($nom,$paterno,$materno,$domicil,$tel,$pai,$cd,$postal,$rfc2,$facturar)
{
     try {
$conexion = new conexion(SERVIDOR,USUARIO,PASS,DB);
$consulta=sprintf(
"INSERT INTO clientes(
	nombre,
	apellido_p,
	apellido_m,
    domicilio,
    telefono,
    pais,
    ciudad,
    codigo_p,
    rfc,
    factura)
VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
$conexion->real_escape_string($nom),
$conexion->real_escape_string($paterno),
$conexion->real_escape_string($materno),
$conexion->real_escape_string($domicil),
$conexion->real_escape_string($tel),
$conexion->real_escape_string($pai),
$conexion->real_escape_string($cd),
$conexion->real_escape_string($postal),
$conexion->real_escape_string($rfc2),
$facturar );


$result =$conexion->query($consulta);// se ejecuta la consulta dentro de la base de datos, y se pued hacer todo dento de el parentesis.
if ($result !==true) {
	$conexion-> rollback();
	$conexion-> close();
	return false;
}
$conexion->close();
return true;
	}

catch (Exception $e) {
	$conexion->rollback();
	$conexion->close();
	return false;
	}
  }
  function actualizarClientes($clientes)
  {

		$conexion =  new conexion(SERVIDOR,USUARIO,PASS,DB);
		try
		{	
			$sentenciaSQL ="UPDATE clientes SET 
			nombre ='".$clientes->nombre."', 
			apellido_p ='".$clientes->apellido_p."', 
			apellido_m ='".$clientes->apellido_m."', 
			domicilio ='".$clientes->domicilio."', 
			telefono ='".$clientes->telefono."', 
			pais ='".$clientes->pais."', 
			ciudad ='".$clientes->ciudad."', 
			codigo_p ='".$clientes->codigo_p."', 
			rfc ='".$clientes->rfc."', 
			factura ='".$clientes->factura."' 
			WHERE idCliente ='".$clientes->idCliente."'";

			$result = $conexion->query($sentenciaSQL);
			if ($result !== true) {
				$conexion->rollback();
				return false;
			}
			$conexion->close();
			return true;

		}
		catch(Exception $e)
		{
			$conexion->rollback();
			$conexion->close();
			return true;

		}
   


      }
      function borrarCliente($idCliente){
   	$conexion =  new conexion(SERVIDOR,USUARIO,PASS,DB);
		try
		{	
			$sentenciaSQL ="DELETE FROM clientes WHERE idCliente='".$idCliente."'";

			$result = $conexion->query($sentenciaSQL);
			if ($result !== true) {
				$conexion->rollback();
				return false;
			}
			$conexion->close();
			return true;

		}
		catch(Exception $e)
		{
			$conexion->rollback();
			$conexion->close();
			return true;

		}
   }
}


?>