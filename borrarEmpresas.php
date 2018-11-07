<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eliminando Empresa</title>
	<link rel="stylesheet" href="">
</head>
<body>
  
<?php
	include('datos_conexion.php');

  $id = $_GET['id'];
	// creación de la conexión a la base de datos con mysqli_connect()
	try{
      $base = new PDO("mysql:host=localhost; dbname=mxnpimok_botonPrueba","mxnpimok_userbtn","botonprueba");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");
      
     $base->query("DELETE FROM empresa WHERE id='$id'");

     header("Location:/Botonprueba/PanicButton/formVerEmpresas.php");
   }catch(Exception $e){
    die("Error: ".$e->getMessage());
    echo "Linea de error en: ".$e->getLine();
   }
    
    ?>

</body>
</html>