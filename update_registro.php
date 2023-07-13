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
   $mesa1 = isset( $_POST['mesa1']) ? $_POST['mesa1'] : '';
   $mesa2 = isset( $_POST['mesa2']) ? $_POST['mesa2'] : '';
   $mesa3 = isset( $_POST['mesa3']) ? $_POST['mesa3'] : '';
   $mesa4 = isset( $_POST['mesa4']) ? $_POST['mesa4'] : '';
   $mesa5 = isset( $_POST['mesa5']) ? $_POST['mesa5'] : '';
   $comentario = isset( $_POST['comentario']) ? $_POST['comentario'] : '';
   $reg_usuario =acces_registro($email);
   if($reg_usuario==0){ 
   insert_registro($apaterno, $amaterno, $nombre, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $otro_cargo2, $mesa1, $mesa2, $mesa3, $mesa4, $mesa5, $comentario);   
    $id_usuario =acces_registro($email);
    $id_user=$id_usuario['id_usuario'];
    $d_nombre=$id_usuario['dt_nombre']." ".$id_usuario['dt_apaterno']." ".$id_usuario['dt_amaterno'];
    $d_email=$id_usuario['dt_email'];
    $d_cede=$id_usuario['dt_cede'];
    $d_fecha=$id_usuario['dt_fecha'];
    $_SESSION["id"]=$id_usuario['id_usuario'];   
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
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have 
    //Recipients
    $mail->setFrom('inaes@fese.org.mx', 'FOROS DE VINCULACIÓN 2023.');
    $mail->addAddress($d_email, $d_nombre);     //Add a recipient
    //$mail->addAttachment('img/programa.png', 'new.jpg');    //Optional name
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    // Activo condificacción utf-8
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'FOROS DE VINCULACIÓN 2023..';
    $mail->Body    = '  
    <style>
      h3 {color:blue; font-size:14px;}
    </style>
                  
                                  
               <table style="width:950px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">               
                  <tr>
                     <td align="center" style="padding:20px 0 30px 0;">
                       <img src="http://forosdevinculacion.anuies.mx/img/logo_central.png" alt="" width="300" style="height:auto;display:block;" />
                     </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding:10px 0 10px 0;">
                    <h3>'.$d_nombre.' te damos la bienvenida a los <strong>FOROS DE VINCULACIÓN 2023</strong> que se llevaran a cabo en<br> '.$d_cede.' el '.$d_fecha.' </h3>
                    </td>
                  </tr>
                  <tr>
                  <td align="center" style="padding:0px 0 10px 0;">
                    <h3><strong>Descarga los siguentes documentos</strong></h3>
                     <h4>Marco de referencia del servicio social (Resultados de los Foros de Vinculación 2020)<a href="#">&nbsp;Descargar</a></h4>
                     <h4>Marco de referencia del servicio social (Resultados de los Foros de Vinculación 2020)<a href="#">&nbsp;Descargar</a></h4>
                  </td>
                  </tr>
                  <tr>
                   <td align="center" style="padding:20px 0 30px 0;">
                   <img src="http://forosdevinculacion.anuies.mx/img/Logos_Institucionales.png" alt="" width="600" style="height:auto;display:block;" />
                   </td>                   
                  </tr>  
</table>

                  <p>¡Nos vemos pronto!</p> ';
    //$mail->AltBody = 'Gracias por leer';

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
//caso contario (else) es porque ese user ya esta registrado 
 ?>
<script>
   window.location="existe.php"
</script>
<?php

      }
   }

   ?>