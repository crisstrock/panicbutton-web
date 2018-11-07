<?php
include "datosConexion.php";

$json=array();

	if(isset($_GET["usuario_id"]) && isset($_GET["mac"])){
		$id=$_GET["usuario_id"];
		$mac = $_GET["mac"];
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT * FROM boton_externo WHERE usuario_id='{$id}' AND mac='{$mac}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		$rows = mysqli_num_rows($resultado);
		
			if($rows > 0){
				echo "existe";
			}else{
				echo "noExiste";
			}
		}
?>