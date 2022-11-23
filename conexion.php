<?php
	include "credenciales.php";

	$conn = mysqli_connect($host, $user, $pass);

	if (mysqli_error($conn)) {
		echo "Ha habido un error en la conexión";
	}

	mysqli_select_db($conn, $bbdd);

	if (mysqli_error($conn)) {
		echo "Ha habido un error al conectarse a la base de datos";
	}

	mysqli_query($conn, "SET NAMES 'utf8'");

?>
