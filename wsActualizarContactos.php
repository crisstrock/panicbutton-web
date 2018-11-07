<?PHP
include "datosConexion.php";

$conexion = mysqli_connect($hostname,$username,$password,$database) or die ("No se ha podido conectar al servidor de Base de datos");

if($conexion){
	$usuario_id = $_POST["usuario_id"];
	$mensaje = $_POST["mensaje"];
	$num_uno = $_POST["num_uno"];
	$num_dos = $_POST["num_dos"];
	$num_tres = $_POST["num_tres"];

	//$path = "imagenes/$nombre.jpg";
	mysqli_set_charset($conexion, "utf8");

	//$url = "http://$hostname_localhost/ejemploBDRemota/$path";
	//$url = "imagenes/".$nombre.".jpg";

	//file_put_contents($path,base64_decode($imagen));
	//$bytesArchivo=file_get_contents($path);

	$sql="UPDATE contactos SET mensaje='$mensaje' , num_uno='$num_uno', num_dos='$num_dos', num_tres='$num_tres' WHERE usuario_id='$usuario_id'";
	$resultado = mysqli_query($conexion, $sql) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
		
	if($resultado){
		echo "actualiza";
	}else{
		echo "noActualiza";
	}

	mysqli_close($conexion);

}
	
?>

