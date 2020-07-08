<?php 
  //home page
  include("conex_bd.php");
  session_start();

  if(!isset($_SESSION['usuario'])){
    header("Location: erro404.php");
  }  else{
    $consulta = "SELECT * FROM usuarios WHERE usuario = '".$_SESSION['usuario']."' ";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado){
      while ($row = $resultado->fetch_array()) {
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $cumpleanos = $row['cumpleanos'];
        $fecha_registro = $row['fecha_registro'];
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Alertify CSS -->
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bcb5003990.js" crossorigin="anonymous"></script>


    <!-- Mis estilos -->

    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>web.com</title>
  </head>

  <body>

    <div class="myNav container-fluid bg-dark"> <!-- header -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="img/alien.png" width="40" height="40" class="d-inline-block" alt="" loading="lazy">
          web.com
        </a>
        <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li> 
        </ul>

        <ul class="navbar-nav ml-auto">          
          <li class="nav-item">            
           <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
              @<?php echo $_SESSION['usuario'] ?>
            </button>
            <div class="dropdown-menu dropdown-menu-right ml-5">
              <a class="dropdown-item" href="miperfil.php"><i class="fas fa-align-right"></i> Mi perfil</a>
              <a class="dropdown-item" href="configuracionperfil.php"><i class="fas fa-wrench"></i> Configuración</a>
              <hr>
              <a class="dropdown-item" href="cerrarsesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
            </div>
          </div>
          </li>
        </ul>
        </div>
      </nav>
    </div>     <!-- header NAV BAR--><!-- navbar -->

    <div class="container w-100">
      <div class="row">
        
     

      <div class="col-8">
                
        <?php 
          $query = "SELECT * FROM publicaciones WHERE autor = '".$_SESSION['usuario']."' ORDER By id DESC";
          $resultado = mysqli_query($conex, $query);

          if(!$resultado){
            die('Query Error' . mysqli_error($conex));
          } else{
              while($row = mysqli_fetch_array($resultado)){

                $queryB = "SELECT * FROM interacciones WHERE usuario = '".$_SESSION['usuario']."' AND publicacion = '".$row['id']."' ";
                $resultadoB = mysqli_query($conex, $queryB);
                $rowB = mysqli_fetch_array($resultadoB, MYSQLI_ASSOC);

                $fecha = $row['date'];
        ?>

              <div id="card"  class="card text-white bg-dark mt-3">
                <div class="card-header">
                  <small>Publicado por <a href="#">@<?php echo($row['autor']);  ?></a></small>
                  <a href="#"><?php echo(time_elapsed_string($fecha));  ?></a>
                </div>
                <div class="card-body"> 
                  <h5 class="card-title"><?php echo($row['titulo']); ?></h5>
                  <p class="card-text text-justify"><?php echo($row['descripcion']);?></p>
                  <img src="<?php echo($row['multimedia']) ?>" class="rounded mx-auto d-block w-100">
                </div>
                <div class="card-footer">

              <?php 
                if(!isset($rowB['reaccion'])){
              ?>
                  <button id="<?php echo($row['id']); ?>" class="btn btn-dark up" style="background-color: none;"><i class="fas fa-arrow-alt-circle-up"></i></button>
                  <?php echo($row['up'] - $row['down']);?>
                  <button id="<?php echo($row['id']); ?>" class="btn btn-dark down" style="background-color: none;"><i class="fas fa-arrow-alt-circle-down"></i></button>

              <?php } else if($rowB['reaccion'] == 0){ ?>

                  <button id="<?php echo($row['id']); ?>" class="btn btn-dark up" style="background-color: none;"><i class="fas fa-arrow-alt-circle-up"></i></button>
                  <?php echo($row['up'] - $row['down']);?>
                  <button id="<?php echo($row['id']); ?>" class="btn btn-dark down" style="background-color: red;"><i class="fas fa-arrow-alt-circle-down"></i></button>

              <?php } else if($rowB['reaccion'] == 1){ ?>    

                  <button id="<?php echo($row['id']); ?>" class="btn btn-dark up" style="background-color: green;"><i class="fas fa-arrow-alt-circle-up"></i></button>
                  <?php echo($row['up'] - $row['down']);?>
                  <button id="<?php echo($row['id']); ?>" class="btn btn-dark down" style="background-color: none;"><i class="fas fa-arrow-alt-circle-down"></i></button>

              <?php } ?>
                  
                  <button id="<?php echo($row['id']); ?>" class="btn btn-dark btn_comentarios"><i class="far fa-comments"></i> <?php echo($row['comentarios']);?> comentarios</button>
                  <button class="btn btn-dark"><i class="fas fa-share-square"></i> compartir</button>
                 <button class="btn btn-dark"><i class="fas fa-save"></i> guardar</button>
                </div>
              </div> 
        <?php } //end of while
            } //end of else?> 
      </div>

      <div class="col-4">
        <div class="card text-white bg-dark text-center">
        <div class="card-header">Mi perfil</div>
        <div class="card-body">
          <h5 class="card-title">@<u><?php echo $_SESSION['usuario'] ?></u></h5>
          <p class="card-text"><?php echo $nombre," ",$apellido; ?></p>
          <p class="card-text"><i class="fas fa-envelope"></i> <?php echo $_SESSION['email'] ?></p>
          <p class="card-text"><i class="fas fa-birthday-cake"></i> <?php echo $cumpleanos; ?> || <i class="far fa-calendar-check"></i> <?php echo $fecha_registro; ?></p>
        </div>
        </div>
      </div>
      
         
 </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    

    <script type="text/javascript">
      $(function(){
          $.ajax({
              url: 'peticion.php',
              type: 'POST',
              data: {},
              success: function(response) {
                let rows = JSON.parse(response);
                //console.log(rows);
              }
            })  
      });
    </script>
  </body>
</html>

<?php 
  function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime,new DateTimeZone('America/Bogota'));
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
  }
 ?>