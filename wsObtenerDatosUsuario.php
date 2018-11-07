<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["id"])){
		$id = $_GET["id"];
		
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT * FROM usuario WHERE id= '{$id}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["nombre"]=$registro['nombre'];
			$result["apellido_pat"]=$registro['apellido_pat'];
			$result["apellido_mat"]=$registro['apellido_mat'];
			$result["fecha_nac"]=$registro['fecha_nac'];
			$result["correo"]=$registro['correo'];
			$result["pass"]=$registro['pass'];
			$json['usuario'][]=$result;
		}else{
			$resultar["id"]="No consulta";
			$resultar["nombre"]="No consulta";
			$resultar["apellido_pat"]="No consulta";
			$resultar["apellido_mat"]="No consulta";
			$resultar["fecha_nac"]="No consulta";
			$resultar["correo"]="No consulta";
			$resultar["pass"]="No consulta";
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