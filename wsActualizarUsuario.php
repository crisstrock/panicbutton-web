<?PHP
include "datosConexion.php";

$conexion = mysqli_connect($hostname,$username,$password,$database) or die ("No se ha podido conectar al servidor de Base de datos");

if($conexion){
	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$apellidoPat = $_POST["apellidoPat"];
	$apellidoMat = $_POST["apellidoMat"];
	$fechaNac = $_POST["fechaNac"];
	$correo = $_POST["correo"];
	$pass = $_POST["pass"];

	//$path = "imagenes/$nombre.jpg";
	mysqli_set_charset($conexion, "utf8");

	//$url = "http://$hostname_localhost/ejemploBDRemota/$path";
	//$url = "imagenes/".$nombre.".jpg";

	//file_put_contents($path,base64_decode($imagen));
	//$bytesArchivo=file_get_contents($path);

	$sql="UPDATE usuario SET nombre='$nombre' , apellido_pat='$apellidoPat', apellido_mat='$apellidoMat', fecha_nac='$fechaNac', correo='$correo', pass='$pass' WHERE id='$id'";
	$resultado = mysqli_query($conexion, $sql) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
		
	if($resultado){
		echo "actualiza";
	}else{
		echo "noActualiza";
	}

	mysqli_close($conexion);

}
	
?>

