<?php
include "datosConexion.php";

$json=array();

	if(isset($_GET["id"])){
		$id=$_GET["id"];
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT nombre FROM datos_persona WHERE usuario_id='{$id}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		$rows = mysqli_num_rows($resultado);
		
			if($rows > 0){
				echo "existe";
			}else{
				echo "noExiste";
			}
		}
?>