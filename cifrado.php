<?php
	function encriptar($password) {
		$passwordCifrada = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

		return $passwordCifrada;
	}
?>