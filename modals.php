
    <!-- Modal Form LOGIN -->
    <div class="modal fade" tabindex="-1" role="dialog" id="loginModal" aria-labelledby="modalForm" aria-hidden="true"> 
      <div class="modal-dialog modal-dialog-centered cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header mr-auto ml-auto">
            <h4 class="modal-title" id="modalForm">Inicio de sesión.</h4>  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>          
          </div>
          <form action="login.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" id="usuariok" name="usuario" class="form-control" placeholder="Usuario">                    
              </div>
              <div class="form-group">
                <input type="password" id="contrasenaok" name="contrasena" class="form-control" placeholder="Contraseña">
                <a class="" href="#">¿Olvidaste tu contraseña?</a>       
              </div>
            </div>           
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
              <a type="button" class="btn btn-outline-primary btn-block mt-2" href="crearcuenta.php">Registrate aquí</a>
            </div>
          </form> 
        </div>        
      </div>      
    </div>  <!-- Modal Form LOGIN-->