<?php
include "datosConexion.php";

$json=array();
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);
		//$conexion = mysqli_query("SET NAMES 'utf8'");
		//mysql_set_charset('utf8');
		

		$consulta="SELECT * FROM tipo_boton";

		$resultado=mysqli_query($conexion,$consulta);
		//mysqli_query("SET NAMES 'utf8'");
		while($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["nombre"]=$registro['nombre'];
			$result["descripcion"]=$registro['descripcion'];
			$result["ruta_imagen"]=$registro['ruta_imagen'];
			$json['empresa'][]=$result;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
		}
		mysqli_close($conexion);
		echo json_encode($json);
?>