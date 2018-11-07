<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["id"])){
		$id = $_GET["id"];
		
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT * FROM datos_vehiculo WHERE usuario_id= '{$id}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["titular"]=$registro['titular'];
			$result["marca"]=$registro['marca'];
			$result["modelo"]=$registro['modelo'];
			$result["placas"]=$registro['placas'];
			$result["estado"]=$registro['estado'];
			$result["color"]=$registro['color'];
			$result["descripcion"]=$registro['descripcion'];
			$result["usuario_id"]=$registro['usuario_id'];
			$result["tipo_boton_id"]=$registro['tipo_boton_id'];
			$json['auto'][]=$result;
		}else{
			$resultar["id"]="No consulta";
			$resultar["titular"]="No consulta";
			$resultar["marca"]="No consulta";
			$resultar["modelo"]="No consulta";
			$resultar["placas"]="No consulta";
			$resultar["estado"]="No consulta";
			$resultar["color"]="No consulta";
			$resultar["descripcion"]="No consulta";
			$resultar["usuario_id"]="No consulta";
			$resultar["tipo_boton_id"]="No consulta";
			$json['auto'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['auto'][]=$resultar;
		echo json_encode($json);
	}
?>