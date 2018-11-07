<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ver Empresas</title>
</head>
<body>

	
    
    <div>
        <h1>Empresas</h1>
    </div>
 
    
        
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
      <tbody>

    <?php
    try{
      $base = new PDO("mysql:host=localhost; dbname=mxnpimok_botonPrueba","mxnpimok_userbtn","botonprueba");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$base->exec("SET CHARACTER SET utf8");
      
      $sql_total = "SELECT * FROM empresa";// LIMIT 0,5";
      $resultado = $base->prepare($sql_total);
      $resultado->execute(array());

        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

        echo "<tr>";

        echo "<td>". $registro['nombre'] . "</td>";
        echo "<td>" . $registro['descripcion'] . "</td>";
        echo "<td>".$registro['ruta_imagen']."</td>";
        echo "<td>
        <a href=\"../registros/usuario_delete.php?id=".$registro['id']."\"><input type=\"button\" class=\"btn btn-danger btn-lg\" name=\"del\" id=\"del\" value=\"Borrar\"></a> 
        <a href=\"../registros/editar_usuario.php?id=".$registro['id']." & nom=".$registro['nombre']." & descripcion=".$registro['descripcion']." & ruta_imagen=".$registro['ruta_imagen']."\"><input type=\"button\" class=\"btn btn-primary btn-lg\" name=\"update\" id=\"update\" value=\"Actualizar\"></a>
        <a href=\"header.php?id=".$registro['id']."\"><input type=\"button\" class=\"btn btn-secondary btn-lg\" name=\"verDatos\" id=\"verDatos\" value=\"Ver Datos\"></a>
        </td>";

        echo "</tr>";
    
      }

      $resultado->closeCursor();
    }catch(Exeption $e){
      die('Error: '. $e->GetMessage());
    }finally{
      $base = null;
    }
    ?>

      </tbody>
    </table>

    


  
	
</body>
</html>