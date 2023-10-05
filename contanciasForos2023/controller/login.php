<?php
 session_start();
require_once('databases_log.php');
 $email = isset( $_POST['email']) ? $_POST['email'] : '';
 $region = isset( $_POST['region']) ? $_POST['region'] : '';
 $_SESSION['email'] = $email;
 $_SESSION['region'] = $region;
 $user =get_user_acces($email, $region);
 

if($user == null)
 		{    		
  		?>
				<script>
					//$_SESSION["id"]=$user['id_usuario'];
 		    		//$_SESSION["region"]=$user['dt_region'];
					window.location="../UsuarioNoEncontrado.php"
				</script>
		<?php    
 		}elseif($user['dt_email']==$email AND $user['dt_region']==$region AND $user['tp_usuario']==2){
			$_SESSION["id"]=$user['id_usuario'];
 		    $_SESSION["region"]=$user['dt_region'];

		?>
				<script>
					window.location="../pdf/certificado.php"
				</script>
	   <?php    
 		  }
       ?>