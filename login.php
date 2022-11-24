<?php
	include "conexion.php";
	include "cifrado.php";

	session_start();

	$user = $_POST["user"];
	$pass = $_POST["pass"];

	$user = mysqli_real_escape_string($conn, $user);
	$pass = mysqli_real_escape_string($conn, $pass);


	$query = "SELECT * FROM usuarios where usuario LIKE BINARY '".$user."'";

	$res = mysqli_query($conn, $query);

	if(mysqli_error($conn)) {
		echo "Se ha producido un error en la consulta";
	} else {
		$row = mysqli_num_rows($res);

		if($row > 0) {

			$user = mysqli_fetch_assoc($res);

			$passUser = $user["password"];

			$verificar = password_verify($pass, $passUser);

			if($verificar) {
				$_SESSION["user"] = $user;
				$_SESSION["rol"] = $user["rol"];

				switch($_SESSION["rol"]) {
					case "cliente": header("location:menu_cliente.php"); break;
					case "cocinero": header("location:menu_cocinero.php"); break;
					case "administrador": header("location:menu_administrador.php"); break;
				}

			} else {
				header("location:index_error.php");
			}
		} else {
			header("location:index_error.php");
		}
	}
	mysqli_close($conn);
?>
