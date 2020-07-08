<?php 
	include('conex_bd.php');
	session_start();

	if(!isset($_SESSION['usuario'])){
    	header("Location: error404.php");
  	}else{

  		$publicacionId = $_POST['upId'];
  		$usuario = $_SESSION['usuario'];

	    $query = "SELECT * FROM interacciones WHERE usuario = '$usuario' AND publicacion = '$publicacionId'";
	    $result = mysqli_query($conex, $query);

	    if(!$result){
	      die('Query Error' . mysqli_error($conex));
	    } else{

	    	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	    	if($row == NULL){
	    		echo "no existe";
	    		mysqli_query($conex, "INSERT INTO interacciones(usuario, publicacion, reaccion, date) VALUES ('$usuario','$publicacionId','1',now())");
	    		mysqli_query($conex, "UPDATE publicaciones SET up = up+1 WHERE id = '$publicacionId'");
	    		echo 1;
	    	} else{
	    		echo $row['reaccion'];
	    	}
	    	     

	     }


	  }
?>