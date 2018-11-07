<?php 

include "datosConexion.php";


$conexion = mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");
	if($conexion){

			//Variables
  			$msg = $_POST["msg"];
  			$contacto1 = $_POST["contacto1"];
			$contacto2 = $_POST["contacto2"];
			$contacto3 = $_POST["contacto3"];
			$otro = $_POST["otro"];
			$usuario_id = $_POST["usuario_id"];

	// Selección del a base de datos a utilizar
	mysqli_select_db($conexion, $database) or die ("Upps! no se ha podido conectar con la base de datos");
	mysqli_set_charset($conexion, "utf8");

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO contactos(mensaje,num_uno,num_dos,num_tres,otro,usuario_id) VALUES('$msg','$contacto1','$contacto2','$contacto3','$otro','$usuario_id')";

	$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
	
	if ($resultado) { 
    echo "registra";
  }else{
  	echo "noRegistra";
  }

}

 ?>