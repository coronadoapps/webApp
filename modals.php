<style type="text/css">
  
      #loginModal .modal-content{
        padding: 20px;
        background-color: #fff;
        color: #000;
        border-radius: 5%;
      }
</style>
    <!-- Modal Form LOGIN -->
    <div class="modal fade" tabindex="-1" role="dialog" id="loginModal" aria-labelledby="modalForm" aria-hidden="true"> 
      <div class="modal-dialog modal-dialog-centered cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title ml-auto" id="modalForm"><u>Inicio de sesión</u></h3>  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>          
          </div>
          <form id="formulariologin" action="login.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" id="usuariok" name="usuario" class="form-control" placeholder="Usuario o Correo electrónico">                    
              </div>
              <div class="form-group">
                <input type="password" id="contrasenaok" name="contrasena" class="form-control" placeholder="Contraseña">
                <a class="badge badge-light" href="#">¿Olvidaste tu contraseña?</a>       
              </div>
            </div>           
            <div class="modal-footer">
              <button type="submit" class="btn btn-dark btn-block">Iniciar sesión</button>
              <hr>
              <a class="badge badge-light" href="crearcuenta.php">Registrate aquí</a>
            </div>
          </form> 
        </div>        
      </div>      
    </div>  <!-- Modal Form LOGIN-->

    <script type="text/javascript">
      
      
    </script>