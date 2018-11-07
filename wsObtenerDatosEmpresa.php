<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["id"])){
		$id = $_GET["id"];
		
				
		$conexion = mysqli_connect($hostname,$username,$password,$database) or die ("No se ha podido conectar al servidor de Base de datos");
		mysqli_set_charset($conexion, "utf8");

		$consulta="SELECT * FROM datos_empresa WHERE usuario_id= '{$id}'";
		$resultado=mysqli_query($conexion,$consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
			$result["titular"]=$registro['titular'];
			$result["nombre"]=$registro['nombre'];
			$result["rfc"]=$registro['rfc'];
			$result["calle"]=$registro['calle'];
			$result["numero"]=$registro['numero'];
			$result["colonia"]=$registro['colonia'];
			$result["mun_delegacion"]=$registro['mun_delegacion'];
			$result["estado"]=$registro['estado'];
			$result["pais"]=$registro['pais'];
			$result["organizacion"]=$registro['organizacion'];
			$result["giro"]=$registro['giro'];
			$result["usuario_id"]=$registro['usuario_id'];
			$result["tipo_boton_id"]=$registro['tipo_boton_id'];
			$json['empresa'][]=$result;
		}else{
			$resultar["id"]="No consulta";
			$resultar["titular"]="No consulta";
			$resultar["nombre"]="No consulta";
			$resultar["rfc"]="No consulta";
			$resultar["calle"]="No consulta";
			$resultar["numero"]="No consulta";
			$resultar["colonia"]="No consulta";
			$resultar["mun_delegacion"]="No consulta";
			$resultar["estado"]="No consulta";
			$resultar["pais"]="No consulta";
			$resultar["organizacion"]="No consulta";
			$resultar["giro"]="No consulta";
			$resultar["usuario_id"]="No consulta";
			$resultar["tipo_boton_id"]="No consulta";
			$json['empresa'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['empresa'][]=$resultar;
		echo json_encode($json);
	}
?>