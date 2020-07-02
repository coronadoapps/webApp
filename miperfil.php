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

    <style type="text/css">
      *{
        border: 0px solid;
        font-family: 'Play', sans-serif;
      }

      body {
        background-color: #f5f5f5;
      }

      .myNav{
        background-color: #094293;
        margin-bottom: 20px;
        color: #f5f5f5;
      }

      .navbar a{
        padding: 5px;
        margin-left: 2px;
      }

      .myfooter{
        background-color: #094293;
        color: #f5f5f5;
        text-align: center;
        padding: 30px;
        margin-top: 30px;
      }

      .myfooter img{
        width: 35px;
        padding: 2px;
        margin-bottom: 5px;
        display: inline-block;
      }

      .myfooter a{
        text-decoration: none;
        color: #bdfbdf;
        font-style: italic;
      }

      .myfooter a:hover{
        color: #f6bd6c;
      }

      .contacto a{
        padding: 10px;
        margin: 5px;
      }

      .contacto a:hover, .myNav a:hover{
        border-radius: 10%;
        background-color: #bdfbdf3f;
        transition: 0.3s;
      }

      #formularioregistro, #formulariologin {
        border: 1px solid;
      }

      #formularioregistro .form-control, #formulariologin .form-control {
        border: 1px solid;
      }

      #formularioregistro button:hover:not([disabled]), #formulariologin button:hover:not([disabled]){
        background-color: #;
        color: #;
        transition: 0.2s;
      }

      #formularioregistro button, #formulariologin button{
        background-color: #;
        color: #;
        opacity: 0.9;
      }

      .error {
        outline: solid #ff0000; 
      }

      #formularioregistro a, #formulariologin a{
        color: #;
      }

      .card{
        border: 1px solid;
      }
    </style>

    <title>web.com</title>
  </head>

  <body>

    <div class="myNav container-fluid"> <!-- header -->
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
            <a class="nav-link" href="#">Link 2</a>
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

    <?php include("modals.php"); ?> <!-- MODALS DE LOGIN -->

    <div class="container">
      <div class="row">
        <div class="card border-dark text-center">
          <div class="card-header">Mi perfil</div>
          <div class="card-body text-dark">
            <h5 class="card-title">@<u><?php echo $_SESSION['usuario'] ?></u></h5>
            <p class="card-text"><?php echo $nombre," ",$apellido; ?></p>
            <p class="card-text"><i class="fas fa-envelope"></i> <?php echo $_SESSION['email'] ?></p>
            <p class="card-text"><i class="fas fa-birthday-cake"></i> <?php echo $cumpleanos; ?> || <i class="far fa-calendar-check"></i> <?php echo $fecha_registro; ?></p>
          </div>
        </div>
      </div>  
    </div>


    <div class="myfooter container-fluid"> <!-- footer -->
        <div class="row">
          <div class="contacto col">
            <a href="#">
              <img src="img/twitter.png" class="inline-block" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/reddit.png" class="inline-block" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/linkedin.png" class="inline-block" alt="" loading="lazy">
            </a> 
            <a href="#">
              <img src="img/github.png" class="inline-block" alt="" loading="lazy">
            </a>           
          </div>
        </div>
        <div class="row">
          <div class="col">            
            Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon"> www.flaticon.es</a>
            <p>Copyright © 2020 Bootstrap 4</p> 
          </div>
        </div>  
    </div>    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   

    <script type="text/javascript">





    </script>
  </body>
</html>