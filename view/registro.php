
    <div class="col-sm-5 mt-1">
    <div style="font-size: 3rem;" class="lead">
      <i class="fas fa-user-shield mr-3"></i>
      Datos para iniciar sesión
    </div>
    <hr>
      <form id="formulario_registro_b">
        <div class="form-group">
          <label for="registro_mail" class="lead">Mail Personal</label>
          <input 
            type="email" 
            class="form-control form-control-sm" 
            id="registro_mail" 
            name="registro_mail" 
          >
        </div>
        
        <div class="form-group">
          <label for="registro_password" class="lead">Password</label>
          <input 
            type="password" 
            class="form-control form-control-sm" 
            id="registro_password"
            name="registro_password" 
          >
        </div>
        
        <div class="form-group">
          <span class="btn btn-success btn-block" id="btn_registro_usuario"><span class="lead"><i class="fas fa-plus-circle mr-2"></i><strong>Registrarse</strong></span></span>
        </div>
        <div class="form-group d-flex justify-content-end">
          <a class="btn btn-dark btn-lg" href="login"><span class="lead"><i class="fas fa-window-close"></i> Cancelar</span> </a>
        </div>
      </form>
    </div>
  </div>
</div>


<script src="js/manager_registro.js"></script>