<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Panic Button</title>

	<link rel="stylesheet" href="css/estilomenu.css" media="screen">
	<link rel="stylesheet" href="css/modal_acceso.css" media="screen">

	<style type="text/css"> 
	body{
		background: url(img/panicbuttonbackground.png); 
		position:absolute; 
	}
	html, body { 
		margin:-2PX; 
		padding: 0;
		 }   
	ul.menu { 
		margin:-6px auto 0 auto; 
		width: 1100px;
		 }
		}
	</style>
<head>
	<img src="img/encabezado.png" style="width: 1370px; box-shadow: -1px 1px 16px  #000;"> 

<!---------------------------------------CREACION DEL MENU-------------------------------------------------------->
    <div>
        <ul class="menu" style="box-shadow: -1px 1px 10px  #DAEBEB  ;">
        <!--<li class="submenu"><a href="#" >&nbsp&nbsp&nbspCatálogo</a>
        <ul><li  ><a href="#" id="Usuario" onclick="general_menu()" <?php include'funcion_solicitud.php'; ?>Usuarios</a></li>
        <li ><a href="#">Puestos</a></li>
        </ul>-->
 
<!--____________Modulo de consultas______________________________________________________________________________-->      <li class="submenu"><a href="#">Agregar Empresas</a>
      <ul>
        <li><a href="/Botonprueba/PanicButton/formAgregarEmpresas.php" class="documents" id="empleados">Subir Datos</a></li>
    </ul>
    </li>
<!--_____________________Modulo de Reporte______________________________________________________________________-->
    <li class="submenu"><a href="/Botonprueba/PanicButton/formVerEmpresas.php">Ver Datos</a>
    <!--<ul>
       <li><a href="#">Solicitud Empleo</a></li>
       <li><a href="#"> Horario</a></li>
    </ul>-->
    </li>
<!--___________________Modulo de emergencias____________________________________________________________________-->
    <!--<li><a href="#">Emergencias</a></li>-->

<!--___________________Modulo de Test____________________________________________________________________________-->
    <!--<li><a href="#">Test</a></li>-->
    <li style="margin-left: 540px;" ><a href="logout.php">Salir</a></li>
    </ul> 
    </div>
    </head>
</head>

<body>
	
	<!---DIV que contiene el mensaje se acceso denegado--->
        <!--<div id="myModal" class="modal">
           <div class="modal-content">
                <span class="close">&times;</span>
                <p>ACCESO DENEGADO</p>
          </div>
      </div>-->

</body>
</html>