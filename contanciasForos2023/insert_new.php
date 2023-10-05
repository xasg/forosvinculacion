<?php
   include_once('databases_usuario.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   { 
   $tp_usuario = 2;
   $nombre = isset( $_POST['nombre']) ? $_POST['nombre'] : '';
   $apaterno = isset( $_POST['apaterno']) ? $_POST['apaterno'] : '';
   $amaterno = isset( $_POST['amaterno']) ? $_POST['amaterno'] : ''; 
   $email = isset( $_POST['email']) ? $_POST['email'] : ''; 
   $region = isset( $_POST['region']) ? $_POST['region'] : '';  
   insert_user($nombre, $apaterno, $amaterno, $email, $region,$tp_usuario);

?>
    <script>
       window.location="contanciasForos2023.php"
    </script>
<?php

}
