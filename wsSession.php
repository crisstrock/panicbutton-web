<?php

include "datosConexion.php";

$json = array();

if (isset($_GET["correo"]) && isset($_GET["pwd"])) {
	$correo = $_GET["correo"];
	$pwd = $_GET["pwd"];

	$conn = mysqli_connect($hostname, $username, $password, $database);

	$consulta = "SELECT * FROM usuario WHERE correo = '{$correo}' AND pass = '{$pwd}'";

	$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos".mysqli_error($conn));

	
	if($reg = mysqli_fetch_array($resultado)) {
			$result["id"]=$reg['id'];
			$result["nombre"]=$reg['nombre'];
			$result["correo"]=$reg['correo'];
			$result["pass"]=$reg['pass'];
			$json['usuario'][] = $result;
	} else{
			//$resultar["documento"]=0;
			$resultar["id"]='no registra';
			$resultar["nombre"]='no registra';
			$resultar["correo"]='no registra';
			$resultar["pass"]='no registra';
			$json['usuario'][]=$resultar;
	}
		mysqli_close($conn);
		echo json_encode($json);
} else {
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['usuario'][]=$resultar;
		echo json_encode($json);
}

?>