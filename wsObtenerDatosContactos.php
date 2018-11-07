<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["id"])){
		$id = $_GET["id"];
		
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT * FROM contactos WHERE usuario_id= '{$id}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["mensaje"]=$registro['mensaje'];
			$result["num_uno"]=$registro['num_uno'];
			$result["num_dos"]=$registro['num_dos'];
			$result["num_tres"]=$registro['num_tres'];
			$result["otro"]=$registro['otro'];
			$result["usuario_id"]=$registro['usuario_id'];
			$json['contacto'][]=$result;
		}else{
			$resultar["id"]="No consulta";
			$resultar["mensaje"]="No consulta";
			$resultar["num_uno"]="No consulta";
			$resultar["num_dos"]="No consulta";
			$resultar["num_tres"]="No consulta";
			$resultar["otro"]="No consulta";
			$resultar["usuario_id"]="No consulta";
			$json['contacto'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['contacto'][]=$resultar;
		echo json_encode($json);
	}
?>