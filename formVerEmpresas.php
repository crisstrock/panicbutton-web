<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ver Empresas</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<nav>
    	<div class="nav-wrapper #3d5afe indigo accent-3">
      		<a href="#" class="brand-logo center">Empresas</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
      		</ul>
    	</div>
  	</nav>

  	<table class="centered">
  		<caption>Lugares, Vehículos y Personas en Situaciones de Emergencia</caption>
  		<thead class="#4fc3f7 light-blue lighten-2">
  			<tr>
  			 <th scope="col">Nombre</th>
             <th scope="col">Descripción</th>
             <th scope="col">Imagen</th>
             <th scope="col">Opciones</th>
  			</tr>
  		</thead>
  		<tbody class="#e1f5fe light-blue lighten-5">
  			<?php 
  				try{
  					$base = new PDO("mysql:host=localhost; dbname=mxnpimok_botonPrueba","mxnpimok_userbtn","botonprueba");
      				$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      				$base->exec("SET CHARACTER SET utf8");
      
				    $sql_total = "SELECT * FROM tipo_boton";// LIMIT 0,5";
      				$resultado = $base->prepare($sql_total);
      				$resultado->execute(array());

        			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

        				echo "<tr>";

        				echo "<td>". $registro['nombre'] . "</td>";
        				echo "<td>" . $registro['descripcion'] . "</td>";
        				//echo "<td>".$registro['ruta_imagen']."</td>";
        				echo "<td> <img src=".$registro['ruta_imagen']." width=\"50px\"></td>";
        				echo "<td>
        				<a href=\"/Botonprueba/PanicButton/formEmpresaEdit.php?id=".$registro['id']." & nombre=".$registro['nombre']." & descripcion=".$registro['descripcion']." & ruta_imagen=".$registro['ruta_imagen']."\"><input type=\"button\" class=\"btn btn-primary btn-lg\" name=\"update\" id=\"update\" value=\"Actualizar\"></a>
        				<a href=\"/Botonprueba/PanicButton/formVerDatosExtra.php?id=".$registro['id']."\"><input type=\"button\" class=\"btn btn-secondary btn-lg\" name=\"verDatos\" id=\"verDatos\" value=\"Ver Datos\"></a>
        					</td>";

/*<a href=\"/Botonprueba/PanicButton/borrarEmpresas.php?id=".$registro['id']."\"><input type=\"button\" class=\"btn btn-danger btn-lg\" name=\"del\" id=\"del\" value=\"Borrar\"></a> */
        				echo "</tr>";
    
      				}

      				$resultado->closeCursor();
  				}catch(Exeption $e){
      				die('Error: '. $e->GetMessage());
    			}
  			 ?>

  			 </tbody>
  	</table>
	
</body>
</html>