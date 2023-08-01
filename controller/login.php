<?php
error_reporting(E_ALL);
session_start();
require_once('../databases_registro.php');
if($_POST)
{
 $correo = isset( $_POST['correo']) ? $_POST['correo'] : '';
 $password = isset( $_POST['password']) ? $_POST['password'] : '';
 echo " el nombre del usuario es " ; 
 $user = get_user_acces($correo);


 if( $user['dt_password']==$password)
 {    
 	$_SESSION["id_user"] = $user['id_usuario'];
 	$_SESSION["region"] = $user['dt_region'];
 	$_SESSION["nom_region"] = $user['dt_nombre_region'];
  ?>
				<script>
        <?php if($user['tp_usuario']==2) { ?>
          window.location="../report_region.php"
        <?php } elseif ($user['tp_usuario']==3) { ?>
          window.location="../report.php"       
        <?php } else { ?> 
          window.location="../login.php?error=empty-password-invalid" 
        <?php }  ?> 
        </script>
<?php
     //die();
 }else{

  header('location:../login.php?error=empty-password-invalid');
    exit();


 }

} 
?>


