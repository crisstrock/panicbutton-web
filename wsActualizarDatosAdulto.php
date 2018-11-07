<?PHP
include "datosConexion.php";

$conexion = mysqli_connect($hostname,$username,$password,$database) or die ("No se ha podido conectar al servidor de Base de datos");

if($conexion){
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$direccion = $_POST["direccion"];
	$senia_particular = $_POST["senia_particular"];
	$edad = $_POST["edad"];
	$alergias = $_POST["alergias"];
	$tipo_sangre = $_POST["tipo_sangre"];
	$familiar_uno = $_POST["familiar_uno"];
	$telefono_fam_uno = $_POST["telefono_fam_uno"];
	$familiar_dos = $_POST["familiar_dos"];
	$telefono_fam_dos = $_POST["telefono_fam_dos"];
	$principales_enfermedades = $_POST["principales_enfermedades"];
	$usuario_id = $_POST["usuario_id"];


	//$path = "imagenes/$nombre.jpg";
	mysqli_set_charset($conexion, "utf8");

	//$url = "http://$hostname_localhost/ejemploBDRemota/$path";
	//$url = "imagenes/".$nombre.".jpg";

	//file_put_contents($path,base64_decode($imagen));
	//$bytesArchivo=file_get_contents($path);

	$sql="UPDATE datos_persona SET nombre='$nombre' , apellidos='$apellidos', direccion='$direccion', senia_particular='$senia_particular', edad='$edad', alergias='$alergias', tipo_sangre='$tipo_sangre',
	familiar_uno='$familiar_uno', telefono_fam_uno='$telefono_fam_uno', familiar_dos='$familiar_dos', telefono_fam_dos='$telefono_fam_dos', principales_enfermedades='$principales_enfermedades' WHERE usuario_id='$usuario_id'";
	$resultado = mysqli_query($conexion, $sql) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
		
	if($resultado){
		echo "actualiza";
	}else{
		echo "noActualiza";
	}

	mysqli_close($conexion);

}
	
?>

