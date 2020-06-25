<?php
	include("conex_bd.php");

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
	$result = mysqli_query($conex,$query);

	if(mysqli_num_rows($result) > 0){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: home.php");
	} else{
		header("Location: index.html");
	}

?>