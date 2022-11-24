<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
	<script src="./bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
	<title>Iniciar sesión</title>
</head>

<body>

	<div class="container">
		<h1 class="text-center">Iniciar sesión</h1>

		<form action="./login.php" method="post">
			<div class="form-floating mt-5">
				<input class="form-control" type="text" name="user" id="user"> <br><br>
				<label for="user">Usuario</label> <br>
			</div>

			<div class="form-floating">
				<input class="form-control" type="password" name="pass" id="pass"> <br>
				<label for="pass">Contraseña</label> <br>
			</div>
				
				<input class="btn btn-primary col-12" type="submit" value="Iniciar sesión">
		</form>



		<hr />

		<h1 class="text-center">Registrate</h1>

		<form action="./register.php" method="post" enctype="multipart/form-data">

		<div class="form-floating">
			<input class="form-control" type="text" name="usuario" id="usuario" require> <br><br>
			<label for="usuario">Usuario</label> <br>
		</div>

		<div class="form-floating">
			<input class="form-control" type="password" name="pass1" id="pass1" require> <br><br>
			<label for="pass1">Contraseña</label> <br>
		</div>

		<span style="color:red;">Las contraseñas no coinciden</span>
		<div class="form-floating">
			<input class="form-control" type="password" name="pass2" id="pass2" require> <br><br>
			<label for="pass2">Repetir contraseña</label> <br>
		</div>

		<div class="form-floating">
			<input class="form-control" type="tel" name="telefono" id="telefono" require> <br><br>
			<label for="telefono">Telefono</label> <br>
		</div>

		<label for="img">Imagen de perfil</label> <br>
		<input class="form-control" type="file" name="img" id="img" require> <br><br>
		

			<input class="btn btn-primary col-12 mb-5" type="submit" value="Registrarse">
		</form>
	</div>
</body>

</html>