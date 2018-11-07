<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Empresa</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<nav>
    	<div class="nav-wrapper #3d5afe indigo accent-3">
      		<a href="#" class="brand-logo center">Editar Empresa</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
      		</ul>
    	</div>
  	</nav>
	
	<?php 
	include "datosConexion.php";

	if(!isset($_POST['btnActualizar'])){

	$id = $_GET["id"];
	$nombre = $_GET["nombre"];
	$descripcion = $_GET["descripcion"];
	$ruta_imagen = $_GET["ruta_imagen"];

	}else{
  		try{
  			$id = $_POST['id'];
        	$nombre = $_POST['nombre'];
        	$descripcion = $_POST['descripcion'];
        	$ruta_imagen = $_POST['ruta_imagen'];

        	$base = new PDO("mysql:host=localhost; dbname=".$database."\"","\"".$username."\"","\"".$password."\"");
      		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      		$base->exec("SET CHARACTER SET utf8");
      
				    //$sql_total = "SELECT * FROM empresa";// LIMIT 0,5";
			$query = "UPDATE empresa SET nombre=:miNombre, descripcion=:miDescripcion, ruta_imagen=:miRutaImagen WHERE id=:miId";

      		$resultado = $base->prepare($query);

     		$resultado->execute(array(":miId"=>$id, ":miNombre"=>$nombre, ":miDescripcion"=>$descripcion, ":miRutaImagen"=>$ruta_imagen));

     		//header('Location:../paginas/principal.php');	

      		$resultado->closeCursor();

  			}catch(Exeption $e){
      			die("Error: ".$e->getMessage());
    			//echo "Linea de error en: ".$e->getLine();
    		}
    	}
  			 ?>

 <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="form-group">

    <label for="id">Id</label>
    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" disabled>

  	<label for="name">Nombre</label>
    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingresa tu nombre" required value="<?php echo $nombre; ?>">

	<label for="exampleInputEmail1">Descripción</label>
    <input type="text" class="form-control" name="descripcion" aria-describedby="emailHelp" placeholder="Ingresa tu apellido paterno" required value="<?php echo $descripcion; ?>">

    <label for="exampleInputEmail1">Imagen</label>
    <br>
    <img src="<?php echo $ruta_imagen; ?>" width="150px">
  <br>
  <button type="submit" name="btnActualizar" class="btn btn-primary">Actualizar</button>
  </div>
</form>

</body>
</html>