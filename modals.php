
    <!-- Modal Form LOGIN -->
    <div class="modal fade" tabindex="-1" role="dialog" id="loginModal" aria-labelledby="modalForm" aria-hidden="true"> 
      <div class="modal-dialog modal-dialog-centered cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header mr-auto ml-auto">
            <h4 class="modal-title" id="modalForm"> Únete hoy a nuestra web.</h4>  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>          
          </div>
          <form action="login.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" id="usuariok" name="usuario" class="form-control error" placeholder="Usuario">                    
              </div>
              <div class="form-group">
                <input type="password" id="contrasenaok" name="contrasena" class="form-control" placeholder="Contraseña">  
                <a href="#">¿Olvidaste tu contraseña?</a>       
              </div>
            </div>           
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
              <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#RegistroModal" data-dismiss="modal" aria-label="Close">Registrate aquí.</button>
            </div>
          </form>
 
        </div>        
      </div>      
    </div>  <!-- Modal Form-->

    <!-- Modal Form  REGISTRO DE USUARIO -->
    <div class="modal fade" tabindex="-1" role="dialog" id="RegistroModal" aria-labelledby="modalForm" aria-hidden="true"> 
      <div class="modal-dialog modal-dialog-centered cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header mr-auto ml-auto">
            <h4 class="modal-title" id="modalForm"> Registrate gratis.</h4>  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>          
          </div>
          <form action="registro.php" method="POST">
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
              <p id="advertencias"></p>
              <button type="submit" name="registrar" onclick="return validar();" class="btn btn-primary btn-block ml-auto mr-auto">Registrarse</button>
              <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" aria-label="Close">¿Ya tienes cuenta? Inicia sesión aquí.</button>
            </div>  
          </form>       
        </div>        
      </div>      
    </div>  <!-- Modal Form -->