<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["nombre"])){
		$nombre=$_GET["nombre"];
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="select * from datos_persona where nombre= '{$nombre}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["nombre"]=$registro['nombre'];
			$result["apellidos"]=$registro['apellidos'];
			$result["direccion"]=$registro['direccion'];
			$result["senia_particular"]=$registro['senia_particular'];
			$result["edad"]=$registro['edad'];
			$result["alergias"]=$registro['alergias'];
			$result["tipo_sangre"]=$registro['tipo_sangre'];
			$result["familiar_uno"]=$registro['familiar_uno'];
			$result["telefono_fam_uno"]=$registro['telefono_fam_uno'];
			$result["familiar_dos"]=$registro['familiar_dos'];
			$result["telefono_fam_dos"]=$registro['telefono_fam_dos'];
			$result["principales_enfermedades"]=$registro['principales_enfermedades'];
			//$result["ruta_imagen"]=$registro['ruta_imagen'];
			$json['persona'][]=$result;
		}else{
			$resultar["nombre"]=0;
			$resultar["direccion"]='no registra';
			$resultar["edad"]='no registra';
			//$result["ruta_imagen"]='no registra';
			$json['persona'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['persona'][]=$resultar;
		echo json_encode($json);
	}
?>