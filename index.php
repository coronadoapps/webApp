<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css"> 

    <link rel="stylesheet" type="text/css" href="css/estilos.css">

      
    <script type="text/javascript" src="alertifyjs/alertify.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> <!-- JQUERY -->
    <title>Mi web</title>
  </head>

  <body>
 
    <div class="myNav container-fluid"> <!-- header -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="img/alien.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
          web.com
        </a>
        <div class="collapse navbar-collapse" id="navbarToggle">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="men.php">Link 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
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
   
    <div class="container2">
      <div class="row">
        <div class="col"> 
          <a href="men.php">
            <img src="img/men.jpg" class="img-thumbnail" alt="">
          </a>            
        </div>  
        <div class="col">  
          <a href="women.php">
            <img src="img/men.jpg" class="img-thumbnail" alt="">
          </a>             
        </div>                
      </div>
    </div>


    <div class="myfooter container-fluid"> <!-- footer -->
        <div class="row">
          <div class="contacto col">
            <a href="#">
              <img src="img/twitter.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/reddit.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/youtube.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/linkedin.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
            </a> 
            <a href="#">
              <img src="img/github.png" width="30" height="30" class="inline-block" alt="" loading="lazy">
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
  </body>
</html>