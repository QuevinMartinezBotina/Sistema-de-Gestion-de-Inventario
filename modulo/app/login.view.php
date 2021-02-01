<!DOCTYPE html>
<html>

<head>
	<title>Login Softlithe</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilos.vista.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<!-- Icono -->
	<link rel="icon" href="../../img/icono.ico" type="image/png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>



	<img class="wave" src="../../img/wave-blue.png"><!-- Fondo -->
	<div class="container">
		<div class="img">
			<!-- Imagen lateral del login -->
			<img src="../../img/login-blue.svg">
		</div>
		<div class="login-content">

			<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST" name="login">
				<!-- Formularios -->


				<!-- Imagen Avatar -->
				<img src="../../img/profile-blue.svg">
				<h2 class="title">Iniciar Sesión</h2>


				<!-- usuario -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Usuario</h5>
						<input type="text" class="input" name="usuario">
					</div>
				</div>


				<!-- Contraseña -->
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Contraseña</h5>
						<input type="password" class="input" name="password">
					</div>
				</div>

				<?php if (!empty($errores)) : ?>
					<div class="error" style="color: red; list-style:none;">
						<?php echo $errores; ?>
					</div>
				<?php endif; ?>

				<!-- Enviar formulario -->
				<input type="submit" class="btn" value="Ingresar">

				<div class="login-content" style="width: 100px; margin-left:40%;">
					<!-- <p class="texto-registrate">Desarrollado por Softlithe
						<a href="registrate.php" class="txt-startSesion">Registrarme</a>
					</p> -->
				</div>

			</form>


		</div>
	</div>
	<script type="text/javascript" src="../../js/main.js"></script>
</body>

</html>