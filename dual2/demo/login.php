<?php
require_once('databases_log.php');
session_start();
 $correo = isset( $_POST['email']) ? $_POST['email'] : '';
 $user =get_user_acces($correo);
 ini_set('date.timezone','America/Mexico_City');
 $time = date('H:i:s', time());
if( $user['dt_email']==$correo and $user['tp_usuario']==1)
 		{    		
 		    $_SESSION["id"]=$user['id_usuario'];

  		?>
				<script>
					window.location="../report_resumen.php"
				</script>
		<?php     

 		} elseif($user['dt_email']==$correo and $user['tp_usuario']==2 and $time>="10:20")
 		{
 			 $id = $user['id_usuario'];
 			 insertlog($id);
 			 $_SESSION["id"]=$user['id_usuario'];
		?>
				<script>
					window.location="../programa.php"
				</script>
			<?php
    
 		}elseif($user['dt_email']==$correo and $user['tp_usuario']==2 and $time<="09:19")
 		{
 			 $id = $user['id_usuario'];
 			 insertlog($id);
 			 $_SESSION["id"]=$user['id_usuario'];
		?>
				<script>
					window.location="../auditorio1.php"
				</script>
			<?php
    
 		}else{
		?>
				<script>
					window.location="../index.html"
				</script>
			<?php
    
 		}

?>