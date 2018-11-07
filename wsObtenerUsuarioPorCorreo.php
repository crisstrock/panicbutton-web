<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["correo"])){
		$correo = $_GET["correo"];
		
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT * FROM usuario WHERE correo= '{$correo}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["nombre"]=$registro['nombre'];
			$result["apellido_pat"]=$registro['apellido_pat'];
			$result["apellido_mat"]=$registro['apellido_mat'];
			$result["correo"]=$registro['correo'];
			$json['usuario'][]=$result;
		}else{
			$resultar["id"]="No consulta";
			$resultar["nombre"]="No consulta";
			$resultar["apellido_pat"]="No consulta";
			$resultar["apellido_mat"]="No consulta";
			$resultar["correo"]="No consulta";
			$json['usuario'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['usuario'][]=$resultar;
		echo json_encode($json);
	}
?>