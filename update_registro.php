<?php 
   include_once('databases_registro.php');
   session_start(); 
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';
   require 'PHPMailer/src/Exception.php'; 
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
   $otro_cargo2 = isset( $_POST['otro_cargo2']) ? $_POST['otro_cargo2'] : '';
   // Se agrega el issset para realizar el insert en la base de datos con los campos agregados en registro  
   $educacion_dual_dt = isset( $_POST['educacion_dual']) ? $_POST['educacion_dual'] : '';
   $servicio_social_comunitario_dt = isset( $_POST['servicio_social_comunitario']) ? $_POST['servicio_social_comunitario'] : '';
   $economia_social_solidaria_dt = isset( $_POST['economia_social_solidaria']) ? $_POST['economia_social_solidaria'] : ''; 
   // -------------------------------------------------------------------------
   $mesa1 = isset( $_POST['mesa1']) ? $_POST['mesa1'] : '';
   $mesa2 = isset( $_POST['mesa2']) ? $_POST['mesa2'] : '';
   $mesa3 = isset( $_POST['mesa3']) ? $_POST['mesa3'] : '';
   $mesa4 = isset( $_POST['mesa4']) ? $_POST['mesa4'] : '';
   $mesa5 = isset( $_POST['mesa5']) ? $_POST['mesa5'] : '';
   $comentario = isset( $_POST['comentario']) ? $_POST['comentario'] : '';
   $reg_usuario =acces_registro($email);
   $maximo_participantes = get_region_acept_users($region);
   $bandera = true;
  //  Se valida que no este llena con 30 participantes primero
  foreach ($maximo_participantes as  $tope) {
    # code...
    if ($tope['aceptados'] >= 70 ) {
      # code...
      insert_registro($apaterno, $amaterno, $nombre, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $otro_cargo2,$educacion_dual_dt,$servicio_social_comunitario_dt, $economia_social_solidaria_dt , $mesa1, $mesa2, $mesa3, $mesa4, $mesa5, $comentario);   
      $bandera = false;
      header("Location: limite.php");
    }
    }
// ------------------------------------
    if($reg_usuario==0 && $bandera ){ //se agrega validación de bandera
      insert_registro($apaterno, $amaterno, $nombre, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $otro_cargo2,$educacion_dual_dt,$servicio_social_comunitario_dt, $economia_social_solidaria_dt , $mesa1, $mesa2, $mesa3, $mesa4, $mesa5, $comentario);   
       $id_usuario =acces_registro($email);
       $id_user=$id_usuario['id_usuario'];
       $d_nombre=$id_usuario['dt_nombre']." ".$id_usuario['dt_apaterno']." ".$id_usuario['dt_amaterno'];
       $d_email=$id_usuario['dt_email'];
       $d_cede=$id_usuario['dt_cede'];
       $d_fecha=$id_usuario['dt_fecha'];
       $_SESSION["id"]=$id_usuario['id_usuario'];   
       $regiones = [
         '01' => 'SUR SURESTE',
         '02' => 'CENTRO SUR',
         '03' => 'CENTRO OCCIDENTE',
         '04' => 'NORESTE',
         '05' => 'NOROESTE',
         '06' => 'METROPOLITANA',
       ];
     
     $_region_name = $regiones[$region] ?? 'Valor no válido';
     
    
    
   
   
   
       $body = file_get_contents('https://fese.mx');
      //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer(true);
   try {
       //Server settings
       $mail->SMTPDebug = 0;                      //Enable verbose debug output
       $mail->isSMTP();                                            //Send using SMTP
       $mail->Host       = 'mail.fese.org.mx';                     //Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail->Username   = 'inaes@fese.org.mx';                     //SMTP username
       $mail->Password   = 'HeVr1043D';                               //SMTP password
       $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
       $mail->Port       = 465;                                      //TCP port to connect to; use 587 if you have 
       //Recipients
       $mail->setFrom('inaes@fese.org.mx', 'FOROS DE VINCULACIÓN 2023.');
       $mail->addAddress($d_email, $d_nombre);     //Add a recipient
       //$mail->addAttachment('img/programa.png', 'new.jpg');    //Optional name
       //Content
       $mail->isHTML(true);                                 //Set email format to HTML
       // Activo condificacción utf-8
       $mail->CharSet = 'UTF-8';
       $mail->Subject = 'FOROS DE VINCULACIÓN 2023..';
      //if ($region == 02)
      //{
     
        //////////////////////////////////////////////////////////////
        $mail->Body    = '  
       <style>
         h3 {color:black; font-size:14px;}
       </style>
                     
                                     
                  <table style="width:950px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">               
                     <tr>
                        <td align="center" style="padding:20px 0 30px 0;">
                          <img src="http://forosdevinculacion.anuies.mx/img/logo_central.png" alt="" width="300" style="height:auto;display:block;" />
                        </td>
                     </tr>
                     <tr>
                       <td align="center" style="padding:10px 0 10px 0;">
                       <h3>
                         Apreciable '.$d_nombre.' confirmamos la recepción de su postulación, en breve recibirá mayor información de los Foros de Vinculación 2023, región '.$_region_name.', el cual se llevará a cabo de manera presencial en '.$d_cede.'.
                         
                       </h3>
                       </td>
                     </tr>
                     <tr>
                     <td align="center" style="padding:0px 0 10px 0;">
                       <h3>A continuación le pedimos descargar los siguientes documentos y leerlos previamente para tener un panorama completo de los temas tratados.</h3>
                        <h4>Marco General para la Educación Dual del Tipo Superior</h4><a href="https://bit.ly/44nIaw3">Descargar</a>
                        <h4>Marco General Emprendimiento Asociativo</h4><a href="https://bit.ly/3rvkcQV">Descargar</a>
                        <h4>Ficha de Anfitrionia</h4><a href="https://bit.ly/47ibKoz">Descargar</a>
                     </td>
                     </tr>
                     <tr>
                      <td align="center" style="padding:20px 0 30px 0;">
                      <img src="http://forosdevinculacion.anuies.mx/img/Logos_Institucionales.png" alt="" width="600" style="height:auto;display:block;" />
                      </td>                   
                     </tr>  
      </table>
   
                     <p>¡Nos vemos pronto!</p> ';

        /////////////////////////////////////////////////////////////
      }
      /*else
      {
       $mail->Body    = '  
       <style>
         h3 {color:black; font-size:14px;}
       </style>
                     
                                     
                  <table style="width:950px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">               
                     <tr>
                        <td align="center" style="padding:20px 0 30px 0;">
                          <img src="http://forosdevinculacion.anuies.mx/img/logo_central.png" alt="" width="300" style="height:auto;display:block;" />
                        </td>
                     </tr>
                     <tr>
                       <td align="center" style="padding:10px 0 10px 0;">
                       <h3>
                         Apreciable '.$d_nombre.' confirmamos la recepción de su postulación, en breve recibirá mayor información de los Foros de Vinculación 2023, región '.$_region_name.', el cual se llevará a cabo de manera presencial en '.$d_cede.'.
                         
                       </h3>
                       </td>
                     </tr>
                     <tr>
                     <td align="center" style="padding:0px 0 10px 0;">
                       <h3>A continuación le pedimos descargar los siguientes documentos y leerlos previamente para tener un panorama completo de los temas tratados.</h3>
                        <h4>Marco General para la Educación Dual del Tipo Superior</h4><a href="https://bit.ly/44nIaw3">Descargar</a>
                        <h4>Marco General Emprendimiento Asociativo</h4><a href="https://bit.ly/3rvkcQV">Descargar</a>
                     </td>
                     </tr>
                     <tr>
                      <td align="center" style="padding:20px 0 30px 0;">
                      <img src="http://forosdevinculacion.anuies.mx/img/Logos_Institucionales.png" alt="" width="600" style="height:auto;display:block;" />
                      </td>                   
                     </tr>  
      </table>
   
                     <p>¡Nos vemos pronto!</p> ';
    }*/
      //////////////////////////////////////////////////////////////////////////////////////////////////// 

       $mail->AltBody = 'Confirmación de postulación Foros de Vinculación 2023';
   
       $mail->send();
   } catch (Exception $e) {
       echo "Mensaje de error: {$mail->ErrorInfo}";
   }
   
   ?>
       <script>
          window.location="datos.php";
       </script>
   
   <?php
   }else{
   
      $id_usuario =acces_registro($email);
      $id_user=$id_usuario['id_usuario'];
      $_SESSION["id"]=$id_usuario['id_usuario'];  
        foreach ($id_usuario as $value) {
          $estats = $value['tp_estatus_conteo'];
        }
      if ($estats == null) {
        header("Location: limite.php");
      }
   //caso contario (else) es porque ese user ya esta registrado 
    ?>
   <script>
      window.location="existe.php"
   </script>
   <?php
        
      }
      }
  
  

  

   ?>