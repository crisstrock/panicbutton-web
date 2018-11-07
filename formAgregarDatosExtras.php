<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar Datos Extras</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<nav>
    	<div class="nav-wrapper #3d5afe indigo accent-3">
      		<a href="#" class="brand-logo center">Agregar Datos Extras</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
      		</ul>
    	</div>
  	</nav>
<?php

$id = $_GET["id"];

	try{
  					$base = new PDO("mysql:host=localhost; dbname=mxnpimok_botonPrueba","mxnpimok_userbtn","botonprueba");
      				$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      				$base->exec("SET CHARACTER SET utf8");

      				$sql = "SELECT * FROM empresa WHERE id=:idEmp";
      				$resultado = $base->prepare($sql);
      				$resultado->execute(array("idEmp"=>$id));

      				while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                $idEmpresa = $registro['id'];
        				 $nombreEmpresa = $registro['nombre'];
    					      				
    				}
    			

if ($nombreEmpresa == "Adultos Mayores" || $nombreEmpresa == "adultos mayores" || $nombreEmpresa == "Viejitos" || $nombreEmpresa == "viejitos") {
  
  $sql = "SELECT * FROM empresa WHERE id=:idEmp";
              $resultado = $base->prepare($sql);
              $resultado->execute(array("idEmp"=>$id));

              while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                $idEmpresa = $registro['id'];
                            
            }

echo "<div class=\"container\">";

  echo "<form name=\"form1\" action=\"agregarDatosExtras.php\" method=\"post\">";

  	echo "<div class=\"form-group\">";

    echo "<input type=\"text\" class=\"form-control\" name=\"nombre\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa tu nombre\" required>";
    echo "<label for=\"name\">Nombre</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"direccion\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa tu dirección\" required>";
    echo "<label for=\"direccion\">Dirección</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"senia_particular\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa tu seña particular\" required>";
    echo "<label for=\"senia_particular\">Seña particular</label>";

	
    echo "<input type=\"text\" class=\"form-control\" name=\"edad\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa tu edad\" required>";
    echo "<label for=\"edad\">Edad</label>";

    echo "<input type=\"hidden\" class=\"form-control\" name=\"empresa_id\" value=\"".$idEmpresa."\">";
    echo "<label for=\"idEmp\">$idEmpresa</label>";

    echo "<div class=\"row\">";
  	echo "<button type=\"submit\" name=\"btnActualizarViejito\" class=\"btn btn-primary\">Actualizar</button>";
  	echo "</div>";

  echo "</div>";

  echo "</form>";
echo "</div>";

      } else if($nombreEmpresa == "Autos" || $nombreEmpresa == "autos" || $nombreEmpresa == "Vehículos" || $nombreEmpresa == "vehículos"){

echo "<div class=\"container\">";

  echo "<form name=\"form2\" action=\"\" method=\"POST\">";

  	echo "<div class=\"form-group\">";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"id\" value=\"".$idEmpresa."\" disabled>";

    echo "<input type=\"text\" class=\"form-control\" name=\"marca\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa la marca\" required>";
    echo "<label for=\"marca\">Marca</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"modelo\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa tu modelo\" required>";
    echo "<label for=\"modelo\">Modelo</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"color\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa el color\" required>";
    echo "<label for=\"color\">Color</label>";

    echo "<input type=\"text\" class=\"form-control\" name=\"descripcion\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa una descripción\" required>";
    echo "<label for=\"descripcion\">Descripción</label>";
  	
  	echo "<div class=\"row\">";
  	echo "<button type=\"submit\" name=\"btnActualizarVehiculo\" class=\"btn btn-primary\">Actualizar</button>";
  	echo "</div>";

  echo "</div>";
  echo "</form>";
  echo "</div>";

      } else{

echo "<div class=\"container\">";

   echo "<form name=\"form3\" action=\"\" method=\"POST\">";

  	echo "<div class=\"form-group\">";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"id\" value=\"".$idEmpresa."\" disabled>";

    echo "<input type=\"text\" class=\"form-control\" name=\"calle\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa la calle\" required>";
    echo "<label for=\"calle\">Calle</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"numero\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa el número\" required>";
    echo "<label for=\"numero\">Número</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"colonia\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa la colonia\" required>";
    echo "<label for=\"colonia\">Colonia</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"mun_delegacion\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa el municipio o delegación\" required>";
    echo "<label for=\"num_delegacion\">Municipio o Delegación</label>";
    
    echo "<input type=\"text\" class=\"form-control\" name=\"estado\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa el estado\" required>";
    echo "<label for=\"estado\">Estado</label>";
	
    echo "<input type=\"text\" class=\"form-control\" name=\"pais\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa el país\" required>";
    echo "<label for=\"pais\">País</label>";
  
    echo "<div class=\"row\">";
  	echo "<button type=\"submit\" name=\"btnActualizarEstablecimiento\" class=\"btn btn-primary\">Actualizar</button>";
  	echo "</div>";

  echo "</div>";
  echo "</form>";
  echo "</div>";

 } 

 }catch(Exeption $e){
            die("Error: ".$e->getMessage());
          //echo "Linea de error en: ".$e->getLine();
        }

  ?>
 
</body>
</html>