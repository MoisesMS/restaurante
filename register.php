<?php
	include("conexion.php");
	include("cifrado.php");

	if(!empty($_POST["usuario"]) && !empty($_POST["pass1"]) && !empty($_POST["pass2"]) && !empty($_POST["telefono"]) && !empty($_FILES["img"])) {
		$user = $_POST["usuario"];
		$pass1 = $_POST["pass1"];
		$pass2 = $_POST["pass2"];
		$tlf = $_POST["telefono"];
		$img = $_FILES["img"]["name"];

		$user = mysqli_real_escape_string($conn, $user);
		$pass1 = mysqli_real_escape_string($conn, $pass1);
		$pass2 = mysqli_real_escape_string($conn, $pass2);
		$tlf = mysqli_real_escape_string($conn, $tlf);
		

		if($pass1 != $pass2) {
			echo "Hola mundo";
			header("location:index_password_repetida.php");
		} else {

			$query = "SELECT * FROM usuarios WHERE usuario LIKE BINARY '".$user."'";

			$res = mysqli_query($conn, $query);

			$row = mysqli_num_rows($res);

			if($row == 0) {

				$pass1 = encriptar($pass1);

				$query = "INSERT INTO usuarios VALUES(null, '".$user."', '".$pass1."', '".$tlf."', NOW(), '".$img."', 'cliente')";

				mysqli_query($conn, $query);
				echo "<h1>Usuario registrado con éxito <a href='./index.php'>volver al menú de inicio de sesión</a> </h1>";
			} else {
				echo "<h1>Este usuario ya está registrado <a href='./index.php'>volver al menú de inicio de sesión</a></h1>";
			}

		}
	} else {
		header("location:index.php");
	}


	mysqli_close($conn);
?>