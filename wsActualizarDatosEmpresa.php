<?PHP
include "datosConexion.php";

$conexion = mysqli_connect($hostname,$username,$password,$database) or die ("No se ha podido conectar al servidor de Base de datos");

if($conexion){
	$titular = $_POST["titular"];
	$nombre = $_POST["nombre"];
	$rfc = $_POST["rfc"];
	$calle = $_POST["calle"];
	$numero = $_POST["numero"];
	$colonia = $_POST["colonia"];
	$mun_delegacion = $_POST["mun_delegacion"];
	$estado = $_POST["estado"];
	$pais = $_POST["pais"];
	$organizacion = $_POST["organizacion"];
	$giro = $_POST["giro"];
	$usuario_id = $_POST["usuario_id"];

	//$path = "imagenes/$nombre.jpg";
	mysqli_set_charset($conexion, "utf8");

	//$url = "http://$hostname_localhost/ejemploBDRemota/$path";
	//$url = "imagenes/".$nombre.".jpg";

	//file_put_contents($path,base64_decode($imagen));
	//$bytesArchivo=file_get_contents($path);

	$sql="UPDATE datos_empresa SET titular='$titular' , nombre='$nombre', rfc='$rfc', calle='$calle', numero='$numero', colonia='$colonia', mun_delegacion='$mun_delegacion', estado='$estado', pais='$pais', organizacion='$organizacion', giro='$giro' WHERE usuario_id='$usuario_id'";
	$resultado = mysqli_query($conexion, $sql) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
		
	if($resultado){
		echo "actualiza";
	}else{
		echo "noActualiza";
	}

	mysqli_close($conexion);

}
	
?>

