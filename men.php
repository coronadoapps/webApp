<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    <link rel="stylesheet" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <title>Mi web</title>
  </head>
  <body style="background-color: #F5F5F5;">

    <div class="container-fluid" style="background-color: #0F0326;"> <!-- header -->
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0F0326;">
        <a class="navbar-brand" href="index.php">
          <img src="img/icon.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-2">
            <a class="nav-link" href="men.php">Hombre</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">Mujer</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">Tiendas</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button type="button" data-toggle="modal" data-target="#loginModal" class="btn btn-outline-primary mr-2">Iniciar sesión</button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary btn-block mr-2" data-toggle="modal" data-target="#RegistroModal">Registrarse</button>
          </li>
        </ul>
      </nav>
    </div>     <!-- header -->

    <?php include("modals.php"); ?> <!-- MODALS DE LOGIN Y REGISTRO -->

    <div class="container mt-4 py-2"> <!-- CONTENEDOR PRINCIPAL -->
      <div class="row">
        <div class="col-sm-3">             
            <div class="list-group">
              <li class="list-group-item"><h2>Hombre</h2></li>
              <li class="list-group-item"><h4>Categoría</h4></li>              
              <a href="#" class="list-group-item list-group-item-action">Busos</a>
              <a href="#" class="list-group-item list-group-item-action">Camisas</a>
              <a href="#" class="list-group-item list-group-item-action">Camisetas</a>
              <a href="#" class="list-group-item list-group-item-action">Pantalones</a>
              <a href="#" class="list-group-item list-group-item-action">Jeans</a>
            </div>
        </div>  
        <div class="col-sm-9">  
          <div class="row">
            <div class="col-sm-4">
              <p>Hola</p>
            </div>
            <div class="col-sm-4">
              <p>Hola2</p>
            </div>
            <div class="col-sm-4">
              <p>Hola3</p>
            </div>
          </div>            
        </div>                
      </div>
    </div>                                                                                      <!-- CONTENEDOR PRINCIPAL -->

    <div class="sticky-bottom container-fluid py-5 mt-4" style="background-color: #0F0326;"> <!-- footer -->
       <div class="container text-center text-white">
        <div class="row">
          <div class="col">
            <a href="#">
              <img src="img/twitter.png" width="20" height="20" class="inline-block mr-2" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/reddit.png" width="20" height="20" class="inline-block mr-2" alt="" loading="lazy">
            </a>
            <a href="#">
              <img src="img/linkedin.png" width="20" height="20" class="inline-block mr-2" alt="" loading="lazy">
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