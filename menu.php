<?php
	session_start();

	if(isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
		?>
		
		<!DOCTYPE html>
		<html lang="es">
			<head>
				<meta charset="UTF-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Menú principal</title>
			</head>
			<body>
				<h1>Bienvenido <?php echo $_SESSION["user"] ?> </h1>
				<form action="logout.php" method="post">
					<input type="submit" value="Cerrar sesión">
				</form>
			</body>
		</html>

		<?php
	} else {
		header("location: ./invitado.php");
	}
?>
