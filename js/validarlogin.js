$(function(){

  $("#login").click(function(){
    if(!$("#usuariok").val()){
      //alertify.error("Debe completar este campo");
      $("#usuariok").addClass("error");
    } else{
      $("#usuariok").removeClass("error");
      if(!$("#contrasenaok")){
      console.log("oe");}
    }
  });
});


