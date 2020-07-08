<?php
	include("conex_bd.php");
	session_start();

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	if(!$usuario){echo "oe";}

	$query = "SELECT * FROM usuarios WHERE (usuario = '$usuario' OR email = '$usuario') AND contrasena = '$contrasena'";

	$result = mysqli_query($conex,$query);

	if(mysqli_num_rows($result) > 0){
		session_start();
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		$_SESSION['usuario'] = $row[1];
		$_SESSION['email'] = $row[6];

		header("Location: home.php");
	} else{
		header("Location: error404.php");
	}

?>