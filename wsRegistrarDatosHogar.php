<?php 

include "datosConexion.php";


$conexion = mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");
	if($conexion){

			//Variables
			$nomTitular = $_POST["nomTitular"];
  			$calle = $_POST["calle"];
			$numExt = $_POST["numExt"];
			$numInt = $_POST["numInt"];
			$colonia = $_POST["colonia"];
			$municipio = $_POST["municipio"];
			$estado = $_POST["estado"];
			$pais = $_POST["pais"];
			$usuario_id = $_POST["usuario_id"];
			$tipo_boton_id = $_POST["tipo_boton_id"];

	// Selección del a base de datos a utilizar
	mysqli_select_db($conexion, $database) or die ("Upps! no se ha podido conectar con la base de datos");
	mysqli_set_charset($conexion, "utf8");

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO datos_habitacion(titular,calle,numero_ext,numero_int,colonia,mun_delegacion,estado,pais,usuario_id,tipo_boton_id) VALUES('$nomTitular','$calle','$numExt','$numInt','$colonia','$municipio','$estado','$pais','$usuario_id','$tipo_boton_id')";

	$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
	
	if ($resultado) { 
    echo "registra";
  }else{
  	echo "noRegistra";
  }

}