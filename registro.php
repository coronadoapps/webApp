<?php 
	include("conex_bd.php");

	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$contrasena = $_POST['contrasena'];
	$cumpleanos = $_POST['cumpleanos'];
	$email = $_POST['email'];
	$fecha_registro = date("d/m/y");

	$query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
	$result = mysqli_query($conex,$query);

	if(mysqli_num_rows($result) > 0){
		header("Location: index.html");
		echo "<script>alert('Usuario ya registrado')</script>;";
	}else{
		if(isset($_POST['registrar'])){

			$consulta = "INSERT INTO usuarios(usuario, nombre, apellido, contrasena, cumpleanos, email, fecha_registro) VALUES ('$usuario','$nombre','$apellido','$contrasena','$cumpleanos','$email','$fecha_registro')";

			$resultado = mysqli_query($conex, $consulta);

			if($resultado){
				echo "<script>alert('Usuario ha sido registrado correctamente.')</script>;";
				}else{
				echo "Error al crear usuario";
				}
		}
	}

?>