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
        background-color: #f5f5f550;
        transition: 0.3s;
      }

      .container {
        padding: 40px;
        border: 1px solid;
        width: 50%;
        background-color: #fff;
        color: #000;
        border-radius: 5%;
      }

      .container a{
        text-decoration: ;
        color: #094293;
      }

      .container h3 {
        text-decoration: underline;      
      }

      #formularioregistro, #formulariologin{
        border: 0px solid;
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
        color: #094293;;
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
          <h3 class="text-center">Formulario de registro</h3>
          <hr>
          <form id="formularioregistro" action="registro.php" method="POST">

            <div class="form-group">
              <input required type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">  
            </div>

            <div class="form-group">
              <div class="row">
                  <div class="col">
                    <input required type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                  </div>

                  <div class="col">
                    <input required type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido">
                  </div>
              </div>       
            </div>

            <div class="form-group">
              <input required type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña">
            </div>   

            <div class="form-group">
              <input required type="password" id="contrasena2" name="contrasena2" class="form-control" placeholder="Confirmar contraseña">  
            </div>

            <div class="form-group">
              <input required type="date" id="cumpleanos" name="cumpleanos" class="form-control">            
            </div>

            <div class="form-group">
              <input required type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico ">
            </div>

            <p class="text-center small">Al hacer clic en Registrarse, indicas que has leído y aceptas los <a class="badge badge-light" href="#">Términos del servicio</a> y el <a class="badge badge-light" href="#">Aviso de privacidad.</a></p>
            <hr>
            <button type="submit" id="registrar" name="registrar" class="btn btn-dark btn-block">Registrarse</button>
            <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" aria-label="Close">¿Ya tienes una cuenta? Inicia sesión aquí.</button>
          </form>       

        </div>           
      </div>
    </div><!-- CONTENEDOR PRINCIPAL -->


    <div class="myfooter container-fluid"> <!-- footer -->
        <div class="row">
          <div class="contacto col">
            <a target="_blank" href="#">
              <img src="img/twitter.png" class="inline-block" alt="" loading="lazy">
            </a>
            <a target="_blank" href="#">
              <img src="img/reddit.png" class="inline-block" alt="" loading="lazy">
            </a>
            <a target="_blank" href="#">
              <img src="img/linkedin.png" class="inline-block" alt="" loading="lazy">
            </a> 
            <a target="_blank" href="#">
              <img src="img/github.png" class="inline-block" alt="" loading="lazy">
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
    <script type="text/javascript" src="alertifyjs/alertify.js"></script>
    <script type="text/javascript" src="alertifyjs/alertify.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {

        $("#usuario").blur(function() {
          validarusuario();
        });

        $("#nombre, #apellido").blur(function() {
          validarnombres();
        });

        $("#contrasena").blur(function() {
          validarcontrasena();
        });

        $("#contrasena2").blur(function() {
          validarcontrasena2();
        });

        $("#cumpleanos").blur(function() {
          validarcumpleanos();
        });

        $("#email").blur(function() {
          validaremail();
        });

      /////////////////////////////////////////////////////////////////////////////////////////////
      ///////////////////////////////////////////////////////////--------- functions ----------/////
      //////////////////////////////////////////////////////////////////////////////////////////////

        function validarcumpleanos(){
          var cumpleanos = $("#cumpleanos").val();

          if(!cumpleanos){
            alertify.error("Debe completar este campo");
            $("#cumpleanos").addClass("error");
          }else{
            $("#cumpleanos").removeClass("error");
          }
        }

        function validaremail(){
          var email = $("#email").val();
          var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

          if(!email){
            alertify.error("Debe completar este campo");
            $("#email").addClass("error");
          }else{
            if(!regex.test(email)){
              alertify.error("Ingrese un email valido");
              $("#email").addClass("error");
            }else{
              $("#email").removeClass("error");
            }
          }
        }

        function validarcontrasena2(){
          var contrasena2 = $("#contrasena2").val();

          if(!contrasena2){
            alertify.error("Debe completar este campo");
            $("#contrasena2").addClass("error");
          }else{
            $("#contrasena2").removeClass("error");
            if(contrasena2.match(/\s/g)){
              alertify.error("Este campo no puede contener espacios vacios");
              $("#contrasena2").addClass("error");
            }else{
              $("#contrasena2").removeClass("error");
              if(contrasena2.length < 6){
                alertify.error("La contraseña debe tener mínimo 6 caracteres");
                $("#contrasena2").addClass("error");          
                $("#contrasena2").val("");
              }else{
                $("#contrasena2").removeClass("error");
                if(contrasena2 != $("#contrasena").val()){
                  alertify.error("Las contraseñas deben coincidir");
                  $("#contrasena, #contrasena2").addClass("error");
                }else{
                  $("#contrasena, #contrasena2").removeClass("error");
                }
              }        
            }
          }
        }

        function validarcontrasena(){
          var contrasena = $("#contrasena").val();

          if(!contrasena){
            alertify.error("Debe completar este campo");
            $("#contrasena").addClass("error");
          }else{
            $("#contrasena").removeClass("error");
            if(contrasena.match(/\s/g)){
              alertify.error("Este campo no puede contener espacios vacios");
              $("#contrasena").addClass("error");
            }else{
              $("#contrasena").removeClass("error");
              if(contrasena.length < 6){
                alertify.error("La contraseña debe tener mínimo 6 caracteres");
                $("#contrasena").addClass("error");          
                $("#contrasena").val("");
              }else{
                $("#contrasena").removeClass("error");
                if(contrasena != $("#contrasena2").val()){
                  alertify.error("Las contraseñas deben coincidir");
                  $("#contrasena, #contrasena2").addClass("error");
                }else{
                  $("#contrasena").removeClass("error");
                }
              }
            }
          } 
        }

        function validarnombres(){
          var nombre = $("#nombre").val();
          var apellido = $("#apellido").val();

          if(!nombre){
            alertify.error("Debe completar este campo");
            $("#nombre").addClass("error");
          }else{
            $("#nombre").removeClass("error");
            if(nombre.match(/\s/g)){
              alertify.error("Este campo no puede contener espacios vacios");
              $("#nombre").addClass("error");
            }else{
              $("#nombre").removeClass("error");
            }
          } 

          if(!apellido){
            alertify.error("Debe completar este campo");
            $("#apellido").addClass("error");
          }else{
            $("#apellido").removeClass("error");
            if(apellido.match(/\s/g)){
              alertify.error("Este campo no puede contener espacios vacios");
              $("#apellido").addClass("error");
            }else{
              $("#apellido").removeClass("error");
            }
          } 
        }

        function validarusuario(){
          var usuario = $("#usuario").val();

          if(!usuario){
            alertify.error("Debe completar este campo");
            $("#usuario").addClass("error");
          }else{
            $("#usuario").removeClass("error");
            if(usuario.match(/\s/g)){
              alertify.error("Este campo no puede contener espacios vacios");
              $("#usuario").addClass("error");
            }else{
              $("#usuario").removeClass("error");
              if(usuario.length < 5){
                alertify.error("Debe tener mínimo 5 caracteres");
                $("#usuario").addClass("error");
              }else{
                $("#usuario").removeClass("error");
              }
            }
          }    
        }

      });     
    </script>
   
  </body>
</html>