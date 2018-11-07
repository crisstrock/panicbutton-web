<?php 

include "datosConexion.php";


$conexion = mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");
	if($conexion){

			//Variables
		$nomTitular = $_POST["nomTitular"];
		$nombre = $_POST["nombre"];
		$rfc = $_POST["rfc"];
  			$calle = $_POST["calle"];
			$numero = $_POST["numero"];
			$colonia = $_POST["colonia"];
			$mun = $_POST["mun"];
			$estado = $_POST["estado"];
			$pais = $_POST["pais"];
			$orga = $_POST["orga"];
			$giro = $_POST["giro"];
			$usuario_id = $_POST["usuario_id"];
			$tipo_boton_id = $_POST["tipo_boton_id"];

	// Selección del a base de datos a utilizar
	mysqli_select_db($conexion, $database) or die ("Upps! no se ha podido conectar con la base de datos");
	mysqli_set_charset($conexion, "utf8");

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO datos_empresa(titular,nombre,rfc,calle,numero,colonia,mun_delegacion,estado,pais,organizacion,giro,usuario_id,tipo_boton_id) VALUES('$nomTitular','$nombre','$rfc','$calle','$numero','$colonia','$mun','$estado','$pais','$orga','$giro','$usuario_id','$tipo_boton_id')";

	$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
	
	if ($resultado) { 
    echo "registra";
  }else{
  	echo "noRegistra";
  }

}