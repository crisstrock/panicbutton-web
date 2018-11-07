<?PHP
include "datosConexion.php";

$conexion = mysqli_connect($hostname,$username,$password,$database) or die ("No se ha podido conectar al servidor de Base de datos");

if($conexion){
	$titular = $_POST["titular"];
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$placas = $_POST["placas"];
	$estado = $_POST["estado"];
	$color = $_POST["color"];
	$descripcion = $_POST["descripcion"];
	$usuario_id = $_POST["usuario_id"];

	//$path = "imagenes/$nombre.jpg";
	mysqli_set_charset($conexion, "utf8");

	//$url = "http://$hostname_localhost/ejemploBDRemota/$path";
	//$url = "imagenes/".$nombre.".jpg";

	//file_put_contents($path,base64_decode($imagen));
	//$bytesArchivo=file_get_contents($path);

	$sql="UPDATE datos_vehiculo SET titular='$titular' , marca='$marca', modelo='$modelo', placas='$placas', estado='$estado', color='$color', descripcion='$descripcion' WHERE usuario_id='$usuario_id'";
	$resultado = mysqli_query($conexion, $sql) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
		
	if($resultado){
		echo "actualiza";
	}else{
		echo "noActualiza";
	}

	mysqli_close($conexion);

}
	
?>

