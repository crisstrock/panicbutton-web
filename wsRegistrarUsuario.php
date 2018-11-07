<?php

include "datosConexion.php";

$conexion = mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");

	if($conexion){
			//Variables
  			$nombre = $_POST["nombre"];
  			$apellido_pat = $_POST["apellido_pat"];
			$apellido_mat = $_POST["apellido_mat"];
			$fecha_nac = $_POST["fecha_nac"];
			$correo = $_POST["correo"];
			$pass = $_POST["pass"];

	// Selección del a base de datos a utilizar
	mysqli_select_db($conexion, $database) or die ("Upps! no se ha podido conectar con la base de datos");
	mysqli_set_charset($conexion, "utf8");

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO usuario(nombre,apellido_pat,apellido_mat,fecha_nac,correo,pass) VALUES('$nombre','$apellido_pat','$apellido_mat','$fecha_nac','$correo','$pass')";

	$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
	
	if ($resultado) { 
    	echo "registra";
  	}else{
  		echo "noRegistra";
  	}

}

 ?>