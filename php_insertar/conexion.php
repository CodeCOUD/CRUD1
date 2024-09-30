<?php
	$hostname = "autorack.proxy.rlwy.net:29996";
	$user = "root";
	$password = "qTMlikRrnEomJUrwvVhjFAnSWBOtzPWr";
	$bbdd = "railway";
	// mysql://root:qTMlikRrnEomJUrwvVhjFAnSWBOtzPWr@autorack.proxy.rlwy.net:29996/railway
	$mysqli = new mysqli($hostname, $user, $password, $bbdd);
	if ($mysqli->connect_error) {
		die("Conexión fallida: " . $mysqli->connect_error);
	}
?>