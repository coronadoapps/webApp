<?php 
  include("conex_bd.php");
  session_start();

  if(isset($_SESSION['usuario'])){
    header("Location: home.php");
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

    <!-- Mis estilos -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">

  
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
            <a type="button" data-toggle="modal" data-target="#loginModal" class="nav-link">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a type="button" class="nav-link" href="crearcuenta.php">Crear cuenta</a>
          </li>
        </ul>
        </div>
      </nav>
    </div>     <!-- header NAV BAR--><!-- navbar -->

       <!-- Modal Form LOGIN -->
    <div class="modal fade" tabindex="-1" role="dialog" id="loginModal" aria-labelledby="modalForm" aria-hidden="true"> 
      <div class="modal-dialog modal-dialog-centered cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title ml-auto" id="modalForm"><u>Inicio de sesión</u></h3>  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>          
          </div>

          <form id="formulariologin" action="login.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" id="usuariok" name="usuario" class="form-control" placeholder="Usuario o Correo electrónico">                    
              </div>
              <div class="form-group">
                <input type="password" id="contrasenaok" name="contrasena" class="form-control" placeholder="Contraseña">
                <a class="badge badge-info" href="crearcuenta.php">¿Olvidaste tu contraseña?</a> 
              </div>
            </div>           
            <div class="modal-footer">
              <button id="login" type="" class="btn btn-dark btn-block">Iniciar sesión</button>
              <hr>
              <p>Primera vez en web.com? </p><a class="badge badge-info" href="crearcuenta.php">Registrate aquí</a>
            </div>
          </form> 

        </div>        
      </div>      
    </div>  <!-- Modal Form LOGIN--> 



    <div class="container">
      
    </div>

    <div class="myfooter container-fluid bg-dark text-white"> <!-- footer -->
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="alertifyjs/alertify.js"></script>
    <script type="text/javascript" src="alertifyjs/alertify.min.js"></script>   

    <script type="text/javascript" src="js/validarlogin.js"></script>

  </body>
</html>