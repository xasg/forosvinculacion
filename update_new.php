<?php
   include_once('databases_registro.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $id = isset( $_POST['id']) ? $_POST['id'] : '';
   $region = isset( $_POST['region']) ? $_POST['region'] : '';
   $validacion = isset( $_POST['validacion']) ? $_POST['validacion'] : '';
   update_user($id, $validacion);
?>
    <script>
       window.location="report.php?region=<?php echo $region?>"
    </script>
<?php

}
