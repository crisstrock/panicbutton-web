<?php 
include "datosConexion.php";

	if(isset($_POST['btnActualizarViejito'])){

$conexion = mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");

  if($conexion){
  		
  			 
        	$nombre = $_POST['nombre'];
        	$direccion = $_POST['direccion'];
        	$senia_particular = $_POST["senia_particular"];
        	$edad = $_POST["edad"];
          $empresa_id = $_POST['empresa_id'];
         

          // Selección del a base de datos a utilizar
  mysqli_select_db($conexion, $database) or die ("Upps! no se ha podido conectar con la base de datos");
  mysqli_set_charset($conexion, "utf8");
      

          // establecer y realizar consulta. guardamos en variable.
  $consulta1 = "SELECT id FROM empresa WHERE id = '$empresa_id'";
  $resultado1 = mysqli_query($conexion, $consulta1) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));

while($registro1=mysqli_fetch_array($resultado1)){
      $idEmpresa=$registro1['id'];
    }
    

  $consulta = "INSERT INTO datos_persona(nombre,direccion,senia_particular,edad,empresa_id) VALUES('$nombre','$direccion','$senia_particular','$edad','$idEmpresa')";
  $resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));

     		if ($resultado) {
          //echo "Agregado correctamente";
     			header('Location:/Botonprueba/PanicButton/formVerEmpresas.php');
     		}else{
     			echo "Error";
     		}
     			

      		$resultado->closeCursor();

        }
        mysqli_close($conexion);
    	}
 ?>