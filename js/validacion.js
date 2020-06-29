$(document).ready(function() {

  alert("OE");

  //$("#formularioregistro #registrar").attr("disabled","disabled");

  $("#usuario").click(function() {
    validarusuario();

    alert("OE");
  });


  validarusuario(){


    var usuario = $("#usuario").val();

    if(!usuario || usuario == " "){
      alertify.error("Debe completar este campo");
    }
  }

});     



  // $("#formularioregistro .form-control").blur(function(){
  //   if(!$(this).val()){
  //     alertify.error("Complete el campo de " + $(this).attr("placeholder"));
  //     $(this).addClass("error");
  //   }else{
  //     $(this).removeClass("error");

  //     if($(this).val().match(/\s/g)){
  //       alertify.error("El campo de " + $(this).attr("placeholder") + " no puede contener espacios en blanco.");
  //       $(this).addClass("error");
  //     }else{
  //       $(this).removeClass("error");

  //       if($(this).val().length <)
  //     }
  //   }
  // });

      //   var flag = false;
      //   $("#formularioregistro input").blur(function(){     
      //     $(this).each(function(){
      //       if(!$(this).val()){
      //         alertify.error("Complete todos los campos");
      //         $(this).addClass("error");
      //         $("#formularioregistro #registrar").attr("disabled","disabled");
      //       }else{
      //         $(this).removeClass("error");
      //       }
      //     });  
      //   });

      // });



      //     if(!$(this).val()){
      //       alertify.error("Complete todos los campos");
      //       $(this).addClass("error");
      //     }else{            
      //       $(this).removeClass("error");
      //       if ($(this).val().match(/\s/g)) {
      //         alertify.error("No puede contener espacios");
      //         $(this).addClass("error");
      //       }else{
      //         $(this).removeClass("error");
      //       }
      //     }

      //     $("#formularioregistro #contrasena").blur(function() {
      //     if(!$(this).val().match($("#formularioregistro #contrasena2").val())){
      //       alertify.error("Las contraseñas deben coincidir");
      //       $(this).addClass("error");
      //       $("#contrasena2").addClass("error");
      //       }else{
      //         $(this).removeClass("error");              
      //         $("#contrasena2").removeClass("error");
      //       }
      //   });

      //   $("#formularioregistro #contrasena2").blur(function() {
      //     if(!$(this).val().match($("#formularioregistro #contrasena").val())){
      //       alertify.error("Las contraseñas deben coincidir");
      //       $(this).addClass("error");
      //       $("#contrasena").addClass("error");
      //       }else{
      //         $(this).removeClass("error");
      //         $("#contrasena").removeClass("error");
      //       }       
      //   });



