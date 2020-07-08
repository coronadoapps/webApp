<?php 
  //home page
  session_start();
  include('conex_bd.php');

  if(!isset($_SESSION['usuario'])){
    header("Location: error404.php");
  }else{

    $query = "SELECT * FROM publicaciones";
    $result = mysqli_query($conex, $query);

    if(!$result){
      die('Query Error' . mysqli_error($conex));
    }

    $json = array();
      while($row = mysqli_fetch_array($result)) {
        $json[] = array(
              'id' => $row['id'],
              'autor' => $row['autor'],
              'titulo' => $row['titulo'],
              'descripcion' => $row['descripcion'],
              'multimedia' => $row['multimedia'],
              'up' => $row['up'],
              'down' => $row['down'],
              'comentarios' => $row['comentarios'],
              'date' => $row['date']
        );
      }

    $jsonstring = json_encode($json);
    echo $jsonstring;
  } 

?>

