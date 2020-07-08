<?php 
  session_start(); 
  if(!isset($_SESSION['usuario'])){
    header("Location: error404.php");
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

    <div class="container">

      <div class="row">
      	<div class="col">
      		<form id="formulariopublicar" action="publicar.php" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			  	<h3>Crea una nueva publicación</h3>
          <hr>
			    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" required="true" maxlength="30">
			  </div>
			  <div class="form-group">
			    <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripción(opcional)" rows="4" maxlength="400"></textarea>
			  </div>
        <div class="form-group">
          <input type="file" class="form-control-file" name="imagen">
        </div>



			  <div class="ml-auto">
			  	<button onclick="window.location.href = 'home.php'" type="button" class="btn btn-danger">Cancelar</button>
			  	<button type="submit" class="btn btn-primary">Publicar</button>
			  </div>			  
			</form>
      	</div>        
      </div>           
    </div>              <!-- CONTAINER -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 