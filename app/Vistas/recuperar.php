<html>
	<head>
		<title>Cambiar contraseña</title>
		<?php include_once("imports.php"); ?>
		<link rel="shortcut icon" href="../../recursos/img/logoTieOut.ico" type="image/x-icon" /> 		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../../recursos/css/sesion.css">
	</head>
	<body>
		<?php  include_once("header.php"); ?>
		<!--Contenido de la página de Login-->
		<div class="content">
			<div class="center-block">
				<h3 class="encabezado">Cambiar contraseña</h3><br>
				<div class="row">
					<form id="formulario" name="cambiarPsw" class="form-horizontal col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4" role="form" novalidate>
						<div class="form-group">
							<label for="correo" >Correo </label>
							<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />
							<span id="errorCorreo" class="clsError"></span>
						</div>						
						<div class="form-group text-center">
							<button id="recuperar" class="btn btn-primary" type="submit">Enviar</button>
						</div>
					</form>
					<div  class="form-group col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
						<h4><span>Ir a</span>
						<a id="irSesion" href="sesion.php">Inicio de sesión</a></h4>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('footer.php'); ?>
		<script type="text/javascript" src="../../recursos/js/valida.js" ></script>
	</body>
</html>