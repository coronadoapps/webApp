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

    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">

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
            <a class="nav-link" href="#">Link 3</a>
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

    <?php include("modals.php"); ?> <!-- MODALS DE LOGIN -->
    
    <div class="container"> <!-- CONTENEDOR PRINCIPAL -->
      <div class="row">
        <div class="col">
          <h3 class="text-center">Formulario de registro.</h3>

          <form id="formularioregistro" action="" method="POST">

            <div class="form-group">
              <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">  
            </div>

            <div class="form-group">
              <div class="row">
                  <div class="col">
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                  </div>

                  <div class="col">
                    <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido">
                  </div>
              </div>       
            </div>

            <div class="form-group">
              <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña">
            </div>   

            <div class="form-group">
              <input type="password" id="contrasena2" name="contrasena2" class="form-control" placeholder="Confirmar contraseña">  
            </div>

            <div class="form-group">
              <input type="date" id="cumpleanos" name="cumpleanos" class="form-control">            
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico ">
            </div>

            <p class="text-center">Al hacer clic en Registrarse, indicas que has leído y aceptas los <a href="#">Términos del servicio</a> y el <a href="#">Aviso de privacidad.</a></p>

            <button type="submit" id="registrar" name="registrar" class="btn btn-primary btn-block">Registrarse</button>

            <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" aria-label="Close">¿Ya tienes una cuenta? Inicia sesión aquí.</button>
          </form>       

        </div>           
      </div>
    </div><!-- CONTENEDOR PRINCIPAL -->


    <div class="myfooter container-fluid"> <!-- footer -->
        <div class="row">
          <div class="contacto col">
            <a target="_blank" href="#">
              <img src="img/twitter.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a>
            <a target="_blank" href="#">
              <img src="img/reddit.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a>
            <a target="_blank" href="#">
              <img src="img/youtube.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a>
            <a target="_blank" href="#">
              <img src="img/linkedin.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a> 
            <a target="_blank" href="#">
              <img src="img/github.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a>           
          </div>
        </div>
        <div class="row">
          <div class="col">            
            Iconos diseñados por <a target="_blank" href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon" target="_blank"> www.flaticon.es</a>
            <p>Copyright © 2020 Bootstrap 4</p> 
          </div>
        </div>  
    </div>    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/validacion.js"></script>
    <script type="text/javascript" src="alertifyjs/alertify.js"></script>
    <script type="text/javascript" src="alertifyjs/alertify.min.js"></script>   
  </body>
</html>