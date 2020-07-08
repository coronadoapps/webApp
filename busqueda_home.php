<?php 
  //home page
  session_start();
  include('conex_bd.php');

  if(!isset($_SESSION['usuario'])){
    header("Location: error404.php");
  }else{

    $busqueda = $_POST['valor'];

    if(!empty($busqueda)){
      $query = "SELECT * FROM publicaciones WHERE titulo LIKE '$busqueda%'";
      $result = mysqli_query($conex, $query);

      if(!$result){
        die('Query Error' . mysqli_error($conex));
      }

      $json = array();
      while($row = mysqli_fetch_array($result)) {
        $json[] = array(
              'autor' => $row['autor'],
              'titulo' => $row['titulo'],
              'descripcion' => $row['descripcion'],
              'up' => $row['up'],
              'down' => $row['down']
        );
      }

      $jsonstring = json_encode($json);
      echo $jsonstring;
    } 

  }

  
?>

