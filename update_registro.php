<?php 
   include_once('databases_registro.php');
   session_start();   
   if($_POST )
   { 
   $nombre = isset( $_POST['nombre']) ? $_POST['nombre'] : '';
   $apellidos = isset( $_POST['apellidos']) ? $_POST['apellidos'] : '';
   $email = isset( $_POST['email']) ? $_POST['email'] : '';
   $movil = isset( $_POST['movil']) ? $_POST['movil'] : '';
   $telefono = isset( $_POST['telefono']) ? $_POST['telefono'] : '';
   $institucion = isset( $_POST['institucion']) ? $_POST['institucion'] : '';
   $nombre_ins = isset( $_POST['nombre_ins']) ? $_POST['nombre_ins'] : '';
   $asistente = isset( $_POST['asistente']) ? $_POST['asistente'] : '';
   $informacion = isset( $_POST['informacion']) ? $_POST['informacion'] : '';
   $reg_usuario =acces_registro($email);
   $reg_usuario =acces_registro($email);
   if($reg_usuario==0){ 
   insert_registro($nombre, $apellidos, $email, $movil, $telefono, $institucion, $nombre_ins, $asistente, $informacion);  
   $id_usuario =acces_registro($email);   
   $id_user=$id_usuario['id_usuario'];
   $_SESSION["id"]=$id_user;
?>
      
<script type="text/javascript">        
        window.location.href="index.php";
</script>';


      <?php
      }else{
            //caso contario (else) es porque ese user ya esta registrado 
             ?>
            <script>
               window.location="existe.html"
            </script>
            <?php
            }
   }
            ?>