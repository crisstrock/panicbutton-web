<?php
include "datosConexion.php";

$json=array();

	if(isset($_GET["correo"])){
		$correo=$_GET["correo"];
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);

		$consulta="SELECT * FROM usuario WHERE correo='{$correo}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		$rows = mysqli_num_rows($resultado);
		
			if($rows > 0){
				echo "existe";
			}else{
				echo "noExiste";
			}
		}
?>