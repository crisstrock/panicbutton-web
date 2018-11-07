<html>

<head>
	<title>Cargar Imagenes</title>
	
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


            
</head>

<body>
	<nav>
    	<div class="nav-wrapper #3d5afe indigo accent-3">
      		<a href="#" class="brand-logo center">Agregar Tipo Botón</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
      		</ul>
    	</div>
  	</nav>

	<div class="container">
		<br>
	</div>

	
	<div class="container">
		<div class="row">

			<form class="col s12" method='POST' action="agregarEmpresas.php" enctype="multipart/form-data">
		
				<div class="row">
					<div class="input-field col s6">
						<input type='text' name="nombre"/>
						<label>Ingresa el Nombre</label>
					</div>
				</div>

				<div class="row">	
					<div class="input-field col s6">
						<input type='text' name="descripcion"/>
						<label>Ingresa una Descripción</label>
					</div>
				</div>
			
				<div class="row">	
					<div class="input-field col s6">
						<label>Elige una Imagen</label>
						<br>
						<br>
					<div class="file-field input-field">
						<div class="btn">
							<span>Imagen</span>
							<input type='file' name="imagen"/><i class="material-icons left">cloud</i>
						</div>
					</div>
					</div>
				</div>
				
				<div class="row">	
					<div class="input-field col s12">
						<button class="btn waves-effect waves-light #1e88e5 blue darken-1 btn-large" type="submit" name="btn">Enviar Información
	    				<i class="material-icons right">send</i>
  						</button>
  					</div>
  				</div>

					
		</form>

	</div>
	</div>


</body>
</html>


