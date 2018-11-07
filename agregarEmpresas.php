<?PHP

include "datosConexion.php";

$json['img']=array();

	//if(true){)
	if(isset($_POST["btn"])){
		$conexion = mysqli_connect($hostname,$username,$password) or die("No se encontró el servidor");
		mysqli_select_db($conexion,$database)or die("No se encontró la base de datos");
		
		
		$ruta="imagenes";
		
		$archivo=$_FILES['imagen']['tmp_name'];
		echo 'Archivo';
		echo '<br>';
		echo $archivo;

		$nombreArchivo=$_FILES['imagen']['name'];
		echo 'Nombre Archivo';
		echo '<br>';
		echo $nombreArchivo;

		move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

		$ruta = $ruta."/".$nombreArchivo;
		
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		
		echo '<br>';
		echo 'Nombre: ';
		echo $nombre;
		echo '<br>';
		echo 'Descripcion: ';
		echo $descripcion;
		echo '<br>';
		echo 'ruta :';
		echo $ruta;
		echo '<br>';
		echo 'Tipo Imagen: ';
		echo ($_FILES['imagen']['type']);
		echo '<br>';
		echo '<br>';
		echo "Imagen: <br><img src='$ruta'>";
		echo '<br>';
		echo '<br>';
		echo 'imagen en Bytes: ';
		echo '<br>';
		echo '<br>';
		//echo $bytesArchivo=file_get_contents($ruta);
		echo '<br>';
		
		//$bytesArchivo=file_get_contents($ruta);
		$sql="INSERT INTO tipo_boton(nombre,descripcion,ruta_imagen) VALUES ('$nombre','$descripcion','$ruta')";
		//$stm=$conexion->prepare($sql);
		//$stm->bind_param('sss',$nombre,$descripcion,$ruta);
		$resultado = mysqli_query($conexion, $sql) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));
		
		if($resultado){
			echo 'Imagen Insertada Exitosamente ';
			$consulta="SELECT * FROM tipo_boton WHERE nombre='{$nombre}'";
			$resultado1=mysqli_query($conexion,$consulta);
			echo '<br>';
			while ($row=mysqli_fetch_array($resultado1)){
				echo $row['id'].' - '.$row['nombre'].'<br/>';
				array_push($json['img'],array('id'=>$row['id'],'nombre'=>$row['nombre'],'descripcion'=>$row['descripcion'],'ruta'=>$row['ruta_imagen']));
			}

			mysqli_close($conexion);
			
			echo '<br>';
			echo 'Objeto JSON 2';
			echo '<br>';
			echo json_encode($json);

			header("Location:/Botonprueba/PanicButton/formVerEmpresas.php");
		}
	}
?>