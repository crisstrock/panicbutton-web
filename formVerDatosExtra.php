<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Datos Extras</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<nav>
    	<div class="nav-wrapper #3d5afe indigo accent-3">
      		<a href="#" class="brand-logo center">Datos Extras Empresas</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
      		</ul>
    	</div>
  	</nav>
  	

  	<div class="contatiner">

<?php 
  		include "datosConexion.php";

  		$id = $_GET["id"];

  		echo "<div class=\"row\">";
  		echo "<div class=\"col s6\"></div>";
  		echo "<div class=\"col s6\">";
  		echo "<label for=\"datos\" >Agregar Datos Extras</label>";
  		echo "<a href=\"/Botonprueba/PanicButton/formAgregarDatosExtras.php?id=".$id."\" class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\">add</i></a>";
  		echo "</div>";
  	echo "</div>";
  		
  		echo "<table class=\"centered\">";
  			echo "<caption>Datos Extras</caption>";
  			

  					try{


  					$base = new PDO("mysql:host=localhost; dbname=mxnpimok_botonPrueba","mxnpimok_userbtn","botonprueba");
      				$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      				$base->exec("SET CHARACTER SET utf8");

      				$sql = "SELECT nombre FROM tipo_boton WHERE id=:idEmp";
      				$resultado = $base->prepare($sql);
      				$resultado->execute(array("idEmp"=>$id));

      				while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

        				 $nombreEmpresa = $registro['nombre'];
    					      				
    				}

      				if ($nombreEmpresa == "Adultos Mayores" || $nombreEmpresa == "adultos mayores" || $nombreEmpresa == "Viejitos" || $nombreEmpresa == "viejitos") {
      					echo "<thead class=\"#4fc3f7 light-blue lighten-2\">";
		  				 echo "<tr>";
		  			 echo "<th scope=\"col\">Nombre Emergencia</th>";
		             echo "<th scope=\"col\">Nombre</th>";
                 echo "<th scope=\"col\">Dirección</th>";
                 echo "<th scope=\"col\">Seña Particular</th>";
                 echo "<th scope=\"col\">Edad</th>";
                 echo "<th scope=\"col\">Alergias</th>";
                 echo "<th scope=\"col\">Tipo de Sangre</th>";
                 echo "<th scope=\"col\">Nombre Familiar</th>";
                 echo "<th scope=\"col\">Tel. Familiar</th>";
                 echo "<th scope=\"col\">Nombre Familiar 2</th>";
                 echo "<th scope=\"col\">Tel. Familiar 2</th>";
                 echo "<th scope=\"col\">Enfermedades</th>";
                 echo "<th scope=\"col\">Opciones</th>";
		  			echo "</tr>";
		  			echo "</thead>";
		  			echo "<tbody>";
            

            $sql2 = "SELECT * FROM datos_persona WHERE tipo_boton_id=:idEmp";
              $resultado2 = $base->prepare($sql2);
              $resultado2->execute(array("idEmp"=>$id));

              while ($registro2=$resultado2->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>". $nombreEmpresa . "</td>";
                echo "<td>". $registro2['nombre'] . "</td>";
                echo "<td>". $registro2['direccion'] . "</td>";
                echo "<td>". $registro2['senia_particular'] . "</td>";
                echo "<td>". $registro2['edad'] . "</td>";
                echo "<td>". $registro2['alergias'] . "</td>";
                echo "<td>". $registro2['tipo_sangre'] . "</td>";
                echo "<td>". $registro2['familiar_uno'] . "</td>";
                echo "<td>". $registro2['telefono_fam_uno'] . "</td>";
                echo "<td>". $registro2['familiar_dos'] . "</td>";
                echo "<td>". $registro2['telefono_fam_dos'] . "</td>";
                echo "<td>". $registro2['principales_enfermedades'] . "</td>";
                
              echo "</tr>";             
            }
            $resultado2->closeCursor();

      				} else if($nombreEmpresa == "Autos" || $nombreEmpresa == "autos" || $nombreEmpresa == "Vehículos" || $nombreEmpresa == "vehículos"){
      					echo "<thead class=\"#4fc3f7 light-blue lighten-2\">";
		  				 echo "<tr>";
		  			 echo "<th scope=\"col\">Nombre EmergenciaEmergencia</th>";
		             echo "<th scope=\"col\">Marca</th>";
		             echo "<th scope=\"col\">Modelo</th>";
                 echo "<th scope=\"col\">Placas</th>";
                 echo "<th scope=\"col\">Estado</th>";
		             echo "<th scope=\"col\">Color</th>";
		             echo "<th scope=\"col\">Descripción</th>";
		             echo "<th scope=\"col\">Opciones</th>";
		  			echo "</tr>";
		  			echo "</thead>";
		  			echo "<tbody>";

            

            $sql2 = "SELECT * FROM datos_vehiculo WHERE tipo_boton_id=:idEmp";
              $resultado2 = $base->prepare($sql2);
              $resultado2->execute(array("idEmp"=>$id));

              while ($registro2=$resultado2->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>". $nombreEmpresa . "</td>";
                echo "<td>". $registro2['marca'] . "</td>";
                echo "<td>". $registro2['modelo'] . "</td>";
                echo "<td>". $registro2['placas'] . "</td>";
                echo "<td>". $registro2['estado'] . "</td>";
                echo "<td>". $registro2['color'] . "</td>";
                echo "<td>". $registro2['descripcion'] . "</td>";
              echo "</tr>";             
            }
            $resultado2->closeCursor();
      				} else if($nombreEmpresa == "Empresarial" || $nombreEmpresa == "empresarial"){

      					echo "<thead class=\"#4fc3f7 light-blue lighten-2\">";
		  				 echo "<tr>";
		  			 echo "<th scope=\"col\">Nombre Emergencia</th>";
                 echo "<th scope=\"col\">Nombre</th>";
                 echo "<th scope=\"col\">Rfc</th>";
		             echo "<th scope=\"col\">Calle</th>";
		             echo "<th scope=\"col\">Número</th>";
		             echo "<th scope=\"col\">Colonia</th>";
		             echo "<th scope=\"col\">Municipio o Delegación</th>";
		             echo "<th scope=\"col\">Estado</th>";
		             echo "<th scope=\"col\">País</th>";
                 echo "<th scope=\"col\">Organización</th>";
                 echo "<th scope=\"col\">Giro</th>";
		             echo "<th scope=\"col\">Opciones</th>";
		  			echo "</tr>";
		  			echo "</thead>";
		  			echo "<tbody>";

            $sql2 = "SELECT * FROM datos_empresa WHERE tipo_boton_id=:idEmp";
              $resultado2 = $base->prepare($sql2);
              $resultado2->execute(array("idEmp"=>$id));

              while ($registro2=$resultado2->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>". $nombreEmpresa . "</td>";
                echo "<td>". $registro2['nombre'] . "</td>";
                echo "<td>". $registro2['rfc'] . "</td>";
                echo "<td>". $registro2['calle'] . "</td>";
                echo "<td>". $registro2['numero'] . "</td>";
                echo "<td>". $registro2['colonia'] . "</td>";
                echo "<td>". $registro2['mun_delegacion'] . "</td>";
                echo "<td>". $registro2['estado'] . "</td>";
                echo "<td>". $registro2['pais'] . "</td>";
                echo "<td>". $registro2['organizacion'] . "</td>";
                echo "<td>". $registro2['giro'] . "</td>";
              echo "</tr>";             
            }
            $resultado2->closeCursor();
          }else{
                echo "<thead class=\"#4fc3f7 light-blue lighten-2\">";
               echo "<tr>";
             echo "<th scope=\"col\">Nombre Emergencia</th>";
                 //echo "<th scope=\"col\">Nombre</th>";
                 echo "<th scope=\"col\">Calle</th>";
                 echo "<th scope=\"col\">Número Ext.</th>";
                 echo "<th scope=\"col\">Número Int.</th>";
                 echo "<th scope=\"col\">Colonia</th>";
                 echo "<th scope=\"col\">Municipio o Delegación</th>";
                 echo "<th scope=\"col\">Estado</th>";
                 echo "<th scope=\"col\">País</th>";
                 echo "<th scope=\"col\">Opciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            $sql2 = "SELECT * FROM habitacion WHERE tipo_boton_id=:idEmp";
              $resultado2 = $base->prepare($sql2);
              $resultado2->execute(array("idEmp"=>$id));

              while ($registro2=$resultado2->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>". $nombreEmpresa . "</td>";
                echo "<td>". $registro2['calle'] . "</td>";
                echo "<td>". $registro2['numero_ext'] . "</td>";
                echo "<td>". $registro2['numero_int'] . "</td>";
                echo "<td>". $registro2['colonia'] . "</td>";
                echo "<td>". $registro2['mun_delegacion'] . "</td>";
                echo "<td>". $registro2['estado'] . "</td>";
                echo "<td>". $registro2['pais'] . "</td>";
              echo "</tr>";
            }

            $resultado2->closeCursor();
      				}

      				/*echo "<tr>";
        				echo "<td>". $nombreEmpresa . "</td>";*/

  					//$resultado->closeCursor();
      				

      				/*$sql2 = "SELECT * FROM datos_empresa WHERE empresa_id=:idEmp";
      				$resultado2 = $base->prepare($sql2);
      				$resultado2->execute(array("idEmp"=>$id));

      				while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){


        				echo "<td>". $registro['calle'] . "</td>";
        				echo "<td>". $registro['numero'] . "</td>";
    					echo "</tr>";      				
    				}
    				$resultado2->closeCursor();*/

      			}catch(Exeption $e){
      			die("Error: ".$e->getMessage());
    			//echo "Linea de error en: ".$e->getLine();
    			}
  			echo "</tbody>";

  			?>
  		</table>

  	</div>

</body>
</html>