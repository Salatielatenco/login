<?php

  //echo $_POST['id'];

  session_start();
  require_once '../app/conexion.php';

  $conexion = conexion();

  $query = "SELECT * FROM usuario WHERE id_usuario={$_POST['id']}";

  $resultado = $conexion->query($query);

  $datos = $resultado->fetch_assoc();

  //echo $datos['mail_usuario'];

  $conexion->close();


  $sub_directorio = "../archivo/".$datos['mail_usuario'];
  $path = "archivo/".$datos['mail_usuario'];
  //echo $sub_directorio;

  if(!file_exists($sub_directorio)){
    echo "no existe";
  }else{

    echo '
      <div class="row">
        <div class="col">
          <h1 class="text-center">Pago</h1>
          <div class="embed-responsive embed-responsive-1by1 mt-2">
            <iframe class="embed-responsive-item" src="'.$path.'/pago.pdf"></iframe>
          </div>
        </div>
      </div>

      
    ';

  }

?>


