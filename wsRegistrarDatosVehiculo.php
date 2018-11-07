<?php 

include "datosConexion.php";


$conexion = mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");
	if($conexion){

			//Variables
			$nomTitular = $_POST["nomTitular"];
  			$marca = $_POST["marca"];
			$modelo = $_POST["modelo"];
			$placas = $_POST["placas"];
			$estado = $_POST["estado"];
			$color = $_POST["color"];
			$descripcion = $_POST["descripcion"];
			$usuario_id = $_POST["usuario_id"];
			$tipo_boton_id = $_POST["tipo_boton_id"];

	// Selección del a base de datos a utilizar
	mysqli_select_db($conexion, $database) or die ("Upps! no se ha podido conectar con la base de datos");
	mysqli_set_charset($conexion, "utf8");

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO datos_vehiculo(titular,marca,modelo,placas,estado,color,descripcion,usuario_id,tipo_boton_id) VALUES('$nomTitular','$marca','$modelo','$placas','$estado','$color','$descripcion','$usuario_id','$tipo_boton_id')";

	$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
	
	if ($resultado) { 
    echo "registra";
  }else{
  	echo "noRegistra";
  }

}