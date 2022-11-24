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
					<link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
					<script src="./bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
					<title>Menú de <?php echo $_SESSION["user"]["usuario"]; ?> </title>
				</head>
				<body>
					<nav>
						<ul>
							<li>Blog</li>
							<li>Gestionar carta</li>
							<li>Configuración</li>
							
						</ul>
					</nav>

					<form action="./logout.php" method="post">
						<input type="submit" value="Cerrar sesión">
					</form>
				</body>
			</html>
		<?php
	} else {
		header("location: ./invitado.php");
	}
?>
