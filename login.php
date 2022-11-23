<?php
	include "conexion.php";
	include "cifrado.php";

	session_start();

	$user = $_POST["user"];
	$pass = $_POST["pass"];

	$user = mysqli_real_escape_string($conn, $user);
	$pass = mysqli_real_escape_string($conn, $pass);


	$query = "SELECT password FROM usuarios where usuario LIKE BINARY '".$user."'";

	$res = mysqli_query($conn, $query);

	if(mysqli_error($conn)) {
		echo "Se ha producido un error en la consulta";
	} else {
		$row = mysqli_num_rows($res);

		if($row > 0) {

			$passUser = mysqli_fetch_assoc($res);

			$verificar = password_verify($pass, $passUser["password"]);

			if($verificar) {
				header("location:menu.php");
				$_SESSION["user"] = $user;
				$_SESSION["pass"] = $pass;
			} else {
				header("location:index_error.php");
			}
		} else {
			header("location:index_error.php");
		}
		
	}

	mysqli_close($conn);
?>