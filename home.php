<?php 
  session_start();

  if($_SESSION['usuario'] == "" || $_SESSION['usuario'] == NULL){
    echo "No tiene autorización.";
    die();
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
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Mi web</title>
  </head>
  <body>

    <div class="container-fluid"> <!-- header -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="img/icon.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">Link2</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link mr-2" href="#">
              <img src="img/carrito.png" width="30" height="30" class="d-inline-block align-top mr-2" alt="" loading="lazy">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="#">
              <img src="img/notification.png" width="30" height="30" class="d-inline-block align-top mr-2" alt="" loading="lazy">
            </a>
          </li>
          <li class="nav-item dropdown ml-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="img/profile.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Mi perfil</a>
              <a class="dropdown-item" href="#">Configuración</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="cerrarsesion.php">
                <button type="button" class="btn btn-outline-danger">
                  <img src="img/logout.png" width="20" height="20" class="inline-block" alt="" loading="lazy"> Cerrar sesión
                </button>
              </a>
            </div>
          </li>
        </ul>
      </nav>
    </div>     <!-- header -->
   
    <div class="container-fluid py-2" style="background-color: #563D7C;">
       <div class="container text-white">
        <h3>Bienvenido <?php echo $_SESSION['usuario']; ?>.</h3> 
      </div>
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-9">
          
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>            
        </div>     
        <div class="col-3 text-justify">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <form class="form-inline">
            <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary btn-sm" type="submit">
              <img src="img/search.png" width="25" height="25" class="inline-block mb-1" alt="" loading="lazy">
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="sticky-bottom container-fluid py-5 mt-4" style="background-color: #2A2B2A;"> <!-- footer -->
       <div class="container text-center text-white">
        <div class="row">
          <div class="col">
            <a href="#">
              <img src="img/twitter.png" width="40" height="40" class="inline-block mr-4" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/reddit.png" width="40" height="40" class="inline-block mr-4" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/linkedin.png" width="40" height="40" class="inline-block mr-4" alt="" loading="lazy">
            </a>            
          </div>
        </div>
        <div class="row mt-4">
          <div class="col">            
            Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon"> www.flaticon.es</a>
            <p>Copyright © 2020 Bootstrap 4</p> 
          </div>
         </div>        
      </div>
    </div>    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="validar.js"></script>
  </body>
</html>