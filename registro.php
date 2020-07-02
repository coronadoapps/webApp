<?php 
	include("conex_bd.php");

	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$contrasena = $_POST['contrasena'];
	$cumpleanos = $_POST['cumpleanos'];
	$email = $_POST['email'];
	$fecha_registro = date("y/m/d");

	$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' OR email = '$email'";
	$result = mysqli_query($conex,$query);

	if(mysqli_num_rows($result) > 0){
		header("Location: crearcuenta.php");
		echo "usuario o email ya registrado.";
	}else{
		if(isset($_POST['registrar'])){

			$consulta = "INSERT INTO usuarios(usuario, nombre, apellido, contrasena, cumpleanos, email, fecha_registro) VALUES ('$usuario','$nombre','$apellido','$contrasena','$cumpleanos','$email','$fecha_registro')";

			$resultado = mysqli_query($conex, $consulta);

			if($resultado){
				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location: home.php");
				}else{
					echo "error conectar database.";
				}
		}
	}
?>