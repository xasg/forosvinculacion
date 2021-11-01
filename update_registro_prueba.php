<?php 
   include_once('databases_registro.php');
   session_start();   
   if( $_POST )
   { 
   $nombre = isset( $_POST['nombre']) ? $_POST['nombre'] : '';
   $apellidos = isset( $_POST['apellidos']) ? $_POST['apellidos'] : '';
   $email = isset( $_POST['email']) ? $_POST['email'] : '';
   $tel_ins = isset( $_POST['tel_ins']) ? $_POST['tel_ins'] : '';
   $ext = isset( $_POST['ext']) ? $_POST['ext'] : '';
   $tel_movil = isset( $_POST['tel_movil']) ? $_POST['tel_movil'] : '';
   $region = isset( $_POST['region']) ? $_POST['region'] : '';
   $entidad = isset( $_POST['entidad']) ? $_POST['entidad'] : '';
   $organizacion = isset( $_POST['organizacion']) ? $_POST['organizacion'] : '';
   $nom_org = isset( $_POST['nom_org']) ? $_POST['nom_org'] : '';
   $nom_org2 = isset( $_POST['nom_org2']) ? $_POST['nom_org2'] : '';
   $cargo = isset( $_POST['cargo']) ? $_POST['cargo'] : '';
   $cargo2 = isset( $_POST['cargo2']) ? $_POST['cargo2'] : '';
   $otro_cargo = isset( $_POST['otro_cargo']) ? $_POST['otro_cargo'] : '';
   $participacion = isset( $_POST['participacion']) ? $_POST['participacion'] : '';
   $dual_horario1 = isset( $_POST['dual_horario1']) ? $_POST['dual_horario1'] : '';
   $tipo_horario1 = isset( $_POST['tipo_horario1']) ? $_POST['tipo_horario1'] : '';
   $dual_horario2 = isset( $_POST['dual_horario2']) ? $_POST['dual_horario2'] : '';
   $tipo_horario2 = isset( $_POST['tipo_horario2']) ? $_POST['tipo_horario2'] : '';
   $dual_horario3 = isset( $_POST['dual_horario3']) ? $_POST['dual_horario3'] : '';
   $tipo_horario3 = isset( $_POST['tipo_horario3']) ? $_POST['tipo_horario3'] : '';
   $emp_horario1 = isset( $_POST['emp_horario1']) ? $_POST['emp_horario1'] : '';
   $tipo_emp_horario1 = isset( $_POST['tipo_emp_horario1']) ? $_POST['tipo_emp_horario1'] : '';  
   $reg_usuario =acces_registro($email);
   if($reg_usuario==0){ 
   insert_registro($nombre, $apellidos, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $participacion);   
    $id_usuario =acces_registro($email);
    $id_user=$id_usuario['id_usuario'];
    $_SESSION["id"]=$id_usuario['id_usuario'];
    if ($dual_horario1!=NULL) {     
    crear_asistencia_dual1($id_user, $dual_horario1, $tipo_horario1, $participacion);
    }

    if ($dual_horario2!=NULL) { 
    crear_asistencia_dual2($id_user, $dual_horario2, $tipo_horario2, $participacion);
    }

    if ($dual_horario3!=NULL) {   
    crear_asistencia_dual3($id_user, $dual_horario3, $tipo_horario3, $participacion);
    }
     if ($emp_horario1!=NULL) {
    crear_asistencia_emp1($id_user, $emp_horario1, $tipo_emp_horario1, $participacion);
                              }  
?>


    <script>
       window.location="datos_dos.php";
    </script>

<?php
}else{
//caso contario (else) es porque ese user ya esta registrado 
 ?>
<script>
   window.location="datos_dos.php"
</script>
<?php

      }
   }

   ?>