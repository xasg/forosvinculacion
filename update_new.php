<?php
   include_once('databases_registro.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $id = isset( $_POST['id']) ? $_POST['id'] : '';
   update_user($id);
?>
    <script>
       window.location="report.php"
    </script>
<?php

}
