<?php 

include "datosConexion.php";


$conexion = mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");
	if($conexion){

			//Variables
  			$nombre = $_POST["nombre"];
  			$apellidos = $_POST["apellidos"];
			$direccion = $_POST["direccion"];
			$seniaParticular = $_POST["seniaParticular"];
			$edad = $_POST["edad"];
			$alergias = $_POST["alergias"];
			$tipo_sangre = $_POST["tipo_sangre"];
			$familiar_uno = $_POST["familiar_uno"];
			$telefono_fam_uno = $_POST["telefono_fam_uno"];
			$familiar_dos = $_POST["familiar_dos"];
			$telefono_fam_dos = $_POST["telefono_fam_dos"];
			$principales_enfermedades = $_POST["principales_enfermedades"];
			$usuario_id = $_POST["usuario_id"];
			$tipo_boton_id = $_POST["tipo_boton_id"];

	// Selección del a base de datos a utilizar
	mysqli_select_db($conexion, $database) or die ("Upps! no se ha podido conectar con la base de datos");
	mysqli_set_charset($conexion, "utf8");

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO datos_persona(nombre,apellidos,direccion,senia_particular,edad,alergias,tipo_sangre,familiar_uno,telefono_fam_uno,familiar_dos,telefono_fam_dos,principales_enfermedades,usuario_id,tipo_boton_id) VALUES('$nombre','$apellidos','$direccion','$seniaParticular','$edad','$alergias','$tipo_sangre','$familiar_uno','$telefono_fam_uno','$familiar_dos','$telefono_fam_dos','$principales_enfermedades','$usuario_id','$tipo_boton_id')";

	$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
	
	if ($resultado) { 
    echo "registra";
  }else{
  	echo "noRegistra";
  }

}

 ?>