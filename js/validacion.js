$(document).ready(function() {
  let flag = 0;
  //$("#formularioregistro #registrar").attr("disabled","disabled");

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