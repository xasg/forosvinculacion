<?php
   include_once('databases_registro.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $id = isset( $_POST['id']) ? $_POST['id'] : '';
   $region = isset( $_POST['region']) ? $_POST['region'] : '';
   $validacion = isset( $_POST['validacion']) ? $_POST['validacion'] : '';

   if ($validacion=="ACEPTADO") {
        $estatus_validacion = 1;
  } elseif ($validacion=="RECHAZADO") {
        $estatus_validacion = 0;
  }
  update_user($id, $validacion, $estatus_validacion);

?>
    <script>
       window.location="report.php?region=<?php echo $region?>"
    </script>
<?php

}
