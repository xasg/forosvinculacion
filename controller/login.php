<?php
require_once('databases_log.php');
 session_start();
 $correo = isset( $_POST['email']) ? $_POST['email'] : '';
 $user =get_user_acces($correo);
if($user['dt_email']==$correo AND $user['tp_usuario']==2)
 		{    		
 		     $id = $user['id_usuario'];
 			 update_descarga($id);
 			 $_SESSION["id"]=$user['id_usuario'];
  		?>
				<script>
					window.location="../pdf/certificado.php"
				</script>
		<?php    
 		}elseif($user['dt_email']==$correo AND $user['tp_usuario']==3){
 			 $id = $user['id_usuario'];
 			 update_descarga($id);
 			 $_SESSION["id"]=$user['id_usuario'];
		?>
				<script>
					window.location="../pdf/constancia.php"
				</script>
	   <?php    
 		  }elseif($user['dt_email']==$correo AND $user['tp_usuario']==4){
 			 $id = $user['id_usuario'];
 			 update_descarga($id);
 			 $_SESSION["id"]=$user['id_usuario'];
		?>

				<script>
					window.location="../pdf/constancia.php"
				</script>
	   <?php    
 		  }elseif($user['dt_email']==$correo AND $user['tp_usuario']==5){
 			 $id = $user['id_usuario'];
 			 update_descarga($id);
 			 $_SESSION["id"]=$user['id_usuario'];
		?>

				<script>
					window.location="../pdf/certificado.php"
				</script>
	   <?php    
 		  }else{
		?>
				<script>
					window.location="../registro.php"
				</script>
	   <?php    
 		  }
       ?>