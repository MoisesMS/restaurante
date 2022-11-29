<?php
include("conexion.php");
include("cifrado.php");

if (!empty($_POST["usuario"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_FILES["img"])) {
	$user = $_POST["usuario"];
	$pass = $_POST["pass"];
	$email = $_POST["email"];

	$user = mysqli_real_escape_string($conn, $user);
	$pass = mysqli_real_escape_string($conn, $pass);
	$email = mysqli_real_escape_string($conn, $email);

	$query = "SELECT * FROM usuarios WHERE usuario LIKE BINARY '" . $user . "'";

	$res = mysqli_query($conn, $query);

	$row = mysqli_num_rows($res);

	if ($row == 0) {

		$pass = encriptar($pass);

		
		mkdir("./fotos_perfil/" . $user, 0777, false);
		$formato = explode("/", $_FILES["img"]["type"]);
		move_uploaded_file($_FILES["img"]["tmp_name"], "./fotos_perfil/" . $user . "/" . $_FILES["img"]["name"]);
		$ruta = "./fotos_perfil/" . $user . "/" . $_FILES["img"]["name"];

		$query = "INSERT INTO usuarios VALUES(null, '" . $user . "', '" . $email . "', '" . $pass . "', CURDATE(), '" . $ruta . "', 'cliente')";
		mysqli_query($conn, $query);

		echo "<h1>Usuario registrado con éxito <a href='./index.php'>volver al menú de inicio de sesión</a> </h1>";
	} else {
		echo "<h1>Este usuario ya está registrado <a href='./index.php'>volver al menú de inicio de sesión</a></h1>";
	}
} else {
	header("location:index.php");
}


mysqli_close($conn);
