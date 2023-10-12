<?php
require_once('databases_log.php');
 session_start();
 $correo = isset( $_POST['email']) ? $_POST['email'] : '';
 $region = isset( $_POST['region']) ? $_POST['region'] : '';
 $user =get_user_acces($correo, $region);
if($user['dt_email']==$correo AND $user['dt_region']==$region AND $user['tp_usuario']==2)
 		{    		
 		    $_SESSION["id"]=$user['id_usuario'];
 		    $_SESSION["region"]=$user['dt_region'];

  		?>
				<script>
					window.location="../pdf/certificado.php"
				</script>
		<?php    
 		}else{
		?>
				<script>
					window.location="../../index.html"
				</script>
	   <?php    
 		  }
       ?>