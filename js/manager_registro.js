$(document).ready(function(){

  let mail_usuario;
  let password_usuario;

  $('#btn_registro_usuario').click(function(){
    mail_usuario=$("#registro_mail").val();
    password_usuario=$("registro_password").val();

    recolector = "registro_mail=" +$('#registro_mail').val()+
                  "&registro_password=" + $('#registro_password').val()

                  $.ajax({

                    type:'POST',
                    data:
                        recolector
                    ,
                    url: 'control/control_registro.php',
                    success : function(resultado){
                        console.log(resultado)
                    }
                });
  
  });

});








