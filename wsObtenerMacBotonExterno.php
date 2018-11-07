<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["usuario_id"]) && isset($_GET["mac"])){
		$usuario_id = $_GET["usuario_id"];
		$mac = $_GET["mac"];
		
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT * FROM boton_externo WHERE mac= '{$mac}' AND usuario_id= '{$usuario_id}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["mac"]=$registro['mac'];
			$result["usuario_id"]=$registro['usuario_id'];
			$json['mac_boton'][]=$result;
		}else{
			$resultar["id"]="No consulta";
			$resultar["mac"]="No consulta";
			$resultar["usuario_id"]="No consulta";
			$json['mac_boton'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['mac_boton'][]=$resultar;
		echo json_encode($json);
	}
?>