<?PHP
include "datosConexion.php";

$json=array();

	if(isset($_GET["id"])){
		$id=$_GET["id"];
				
		$conexion = mysqli_connect($hostname,$username,$password,$database) or die ("No se ha podido conectar al servidor de Base de datos");

		$consulta="SELECT * FROM datos_persona WHERE usuario_id='{$id}'";
		$resultado=mysqli_query($conexion,$consulta)  or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["id"]=$registro['id'];
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
			$result["usuario_id"]=$registro['usuario_id'];
			$result["tipo_boton_id"]=$registro['tipo_boton_id'];
			$json['adulto'][]=$result;
		}else{
			$resultar["id"]=0;
			$resultar["nombre"]='no registra';
			$resultar["apellidos"]='no registra';
			$resultar["direccion"]='no registra';
			$resultar["senia_particular"]='no registra';
			$resultar["edad"]=0;
			$resultar["alergias"]='no registra';
			$resultar["tipo_sangre"]='no registra';
			$resultar["familiar_uno"]='no registra';
			$resultar["telefono_fam_uno"]='no registra';
			$resultar["familiar_dos"]='no registra';
			$resultar["telefono_fam_dos"]='no registra';
			$resultar["principales_enfermedades"]='no registra';
			$resultar["usuario_id"]=0;
			$resultar["tipo_boton_id"]=0;
			$json['adulto'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	} else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['adulto'][]=$resultar;
		echo json_encode($json);
	}
?>