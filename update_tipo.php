<?php 
   include_once('databases_usuario.php');
   session_start();   
   if( $_POST )
   { 
   $id= $_POST['id'];
   $valida = isset( $_POST['valida']) ? $_POST['valida'] : '';
   $tipo = isset( $_POST['tipo']) ? $_POST['tipo'] : '';
   update_validar($id, $valida, $tipo);  
?>
    <script>
       window.location="expositor.php";
    </script>

  <?php
}
  ?>