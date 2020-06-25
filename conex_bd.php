<?php
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "basededatos";

	$conex = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

	if(!$conex){
		die("Error en la conexión con el servidor!, la conexión falló.");
	}
?> 