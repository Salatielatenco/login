
<?php

  //session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
?>
    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <div class="display-3 text-center">iniciaste sesion</div>
        </div>
      </div>

  

    <script src="js/manager_candidato.js"></script>

<?php  

  }else{

    header("location:login");
    
  }

?>