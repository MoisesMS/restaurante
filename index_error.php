<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Iniciar sesión</title>
	</head>
	<body>
		<form action="./login.php" method="post">
			<p style="color:red">Usuario y/o contraseña incorrectos</p>
			<label for="user">Usuario</label> <br>
			<input type="text" name="user" id="user"> <br><br>

			<label for="pass">Contraseña</label> <br>
			<input type="password" name="pass" id="pass"> <br>
			
			<input type="submit" value="Iniciar sesión">
		</form>

		

		<hr />

	<h1>Registrate</h1>

	<form action="./register.php" method="post" enctype="multipart/form-data">
		<label for="usuario">Usuario</label> <br>
		<input type="text" name="usuario" id="usuario" require> <br><br>

		<label for="pass1">Contraseña</label> <br>
		<input type="password" name="pass1" id="pass1" require> <br><br>

		<label for="pass2">Repetir contraseña</label> <br>
		<input type="password" name="pass2" id="pass2" require> <br><br>

		<label for="telefono">Telefono</label> <br>
		<input type="number" name="telefono" id="telefono" require> <br><br>
		
		<label for="img">Imagen de perfil</label> <br>
		<input type="file" name="img" id="img" require> <br><br>

		<input type="submit" value="Registrarse">
	</form>
	</body>
</html>