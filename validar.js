var usuario, nombre, apellido, contrasena, contrasena2, cumpleanos, email;

	usuario = document.getElementById("usuario");
	nombre = document.getElementById("nombre");
	apellido = document.getElementById("apellido");
	contrasena = document.getElementById("contrasena");
	contrasena2 = document.getElementById("contrasena2");
	cumpleanos = document.getElementById("cumpleanos");
	email = document.getElementById("email");

function validar(){
	if (usuario.value == "" || nombre.value == "" || apellido.value == "" || contrasena.value == "" || contrasena2.value == "" || cumpleanos.value == "" || email.value == "") {
		alert("Debe completar todos los campos.");
		return false;
	} else if(contrasena.value != contrasena2.value){
		alert("Las contraseñas no coinciden.");
		return false;
	}
	return true;
}