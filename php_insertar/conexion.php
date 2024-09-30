<?php
	$hostname = "autorack.proxy.rlwy.net:27136";
	$user = "root";
	$password = "cCszlwQpPmRzElFPUlVTPcaCsfBjbzqo";
	$bbdd = "railway";
	$mysqli = new mysqli($hostname, $user, $password, $bbdd);
	if ($mysqli->connect_error) {
		die("Conexión fallida: " . $mysqli->connect_error);
	}
?>
