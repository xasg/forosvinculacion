<?php 
   include_once('databases_registro.php');
   session_start();   
   if( $_POST )
   { 
   $apaterno = isset( $_POST['apaterno']) ? $_POST['apaterno'] : '';
   $amaterno = isset( $_POST['amaterno']) ? $_POST['amaterno'] : '';
   $nombre = isset( $_POST['nombre']) ? $_POST['nombre'] : '';
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
   $preg1_dia1 = isset( $_POST['preg1_dia1']) ? $_POST['preg1_dia1'] : '';
   $preg2_dia1 = isset( $_POST['preg2_dia1']) ? $_POST['preg2_dia1'] : '';
   $preg1_dia2 = isset( $_POST['preg1_dia2']) ? $_POST['preg1_dia2'] : '';
   $preg2_dia2 = isset( $_POST['preg2_dia2']) ? $_POST['preg2_dia2'] : '';
   $reg_usuario =acces_registro($email);
   if($reg_usuario==0){ 
   insert_registro($apaterno, $amaterno, $nombre, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $participacion, $preg1_dia1, $preg2_dia1,  $preg1_dia2, $preg2_dia2);   
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
       window.location="datos.php";
    </script>

<?php
}else{
//caso contario (else) es porque ese user ya esta registrado 
 ?>
<script>
   window.location="existe.php"
</script>
<?php

      }
   }

   ?>