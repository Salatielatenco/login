<?php

  require_once '../app/conexion.php';
  

  


  $conexion = conexion();

  $datosrecibidos = array (
      
      $mail_usuario = $_POST['registro_mail'],
      $password_usuario = $_POST['registro_password']
      
      );
      
      $query_insert = "INSERT INTO usuario(mail_usuario, password_usuario)values(?,?)"; 
      $insert_preparado = $conexion->prepare($query_insert);
      $insert_preparado->bind_param('ss', $datosrecibidos[0],$datosrecibidos[1]); 
  
      echo $insert_preparado -> execute();
      $insert_preparado -> close();


  ?>
