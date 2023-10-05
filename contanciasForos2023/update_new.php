<?php
   include_once('databases_usuario.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $id = isset( $_POST['id']) ? $_POST['id'] : '';
   $nombre = isset( $_POST['nombre']) ? $_POST['nombre'] : '';
   $apaterno = isset( $_POST['apaterno']) ? $_POST['apaterno'] : '';
   $amaterno = isset( $_POST['amaterno']) ? $_POST['amaterno'] : ''; 
   $email = isset( $_POST['email']) ? $_POST['email'] : '';  
  update_user($id, $nombre, $apaterno, $amaterno, $email);

?>
    <script>
       window.location="contanciasForos2023.php"
    </script>
<?php

}
