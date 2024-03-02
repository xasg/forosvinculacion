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
   $mesa1 = isset( $_POST['mesa']) ? $_POST['mesa'] : '';
   $reg_usuario =acces_registro($email);  
   

   
// ------------------------------------
    if($reg_usuario==0 ){ //se agrega validación de bandera
      insert_registro($apaterno, $amaterno, $nombre, $email, $tel_ins, $ext, $tel_movil, $region, $entidad, $organizacion, $nom_org, $nom_org2, $cargo, $cargo2, $otro_cargo, $otro_cargo2, $mesa1);   
       $id_usuario =acces_registro($email);
       $id_user=$id_usuario['id_usuario'];
       $d_nombre=$id_usuario['dt_nombre']." ".$id_usuario['dt_apaterno']." ".$id_usuario['dt_amaterno'];
       $d_email=$id_usuario['dt_email'];
       $d_cede=$id_usuario['dt_cede'];
       $d_fecha=$id_usuario['dt_fecha'];
       $ubicacion=$id_usuario['dt_ubicacion'];
       $_SESSION["id"]=$id_usuario['id_usuario'];   
       $regiones = [
         '01' => 'SUR SURESTE',
         '02' => 'CENTRO SUR',
         '03' => 'CENTRO OCCIDENTE',
         '04' => 'NORESTE',
         '05' => 'NOROESTE',
         '06' => 'METROPOLITANA',
       ];     
       $regiones_fehchas = [
         '01' => '11 y 12 de abril',
         '02' => '15 y 16 de abril',
         '03' => '18 y 19 de abril',
         '04' => '22 y 23 de abril',
         '05' => '25 y 26 de abril',
         '06' => '3 de mayo',
       ];
       
       switch ($region)
       {
        
        
        case 01:
          $ubicacion = "https://maps.app.goo.gl/Hr5ktMNuSyuCso5v8";
         break;
        case 02:
          $ubicacion = "https://maps.app.goo.gl/hCWtfTvkzZvRRP9WA";
         break;
        case 03:
          $ubicacion = "https://maps.app.goo.gl/87Ur4XKfHeiG1AyX8";
         break;
        case 04:
          $ubicacion = "https://maps.app.goo.gl/Hr5ktMNuSyuCso5v8";
         break;
        case 05:
          $ubicacion = "https://maps.app.goo.gl/Hr5ktMNuSyuCso5v8";
         break;
        case 06:
          $ubicacion = "https://maps.app.goo.gl/Hr5ktMNuSyuCso5v8";
         break;

         default: break; 

       }
       die();
     $_region_name = $regiones[$region] ?? 'Valor no válido'; 
     $_region_fecha = $regiones_fehchas[$region] ?? 'Valor no válido'; 
       $body = file_get_contents('https://fese.mx');
      //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer(true);
   try {
       //Server settings
       $mail->SMTPDebug = 0;                      //Enable verbose debug output
       $mail->isSMTP();                                            //Send using SMTP
       $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail->Username   = 'forosdevinculacion@fese.mx';                     //SMTP username
       $mail->Password   = 'HeVr1043D';                               //SMTP password
       $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
       $mail->Port       = 587;                                      //TCP port to connect to; use 587 if you have 
       //Recipients
       $mail->setFrom('forosdevinculacion@fese.mx', 'FOROS DE VINCULACIÓN 2024.');
       $mail->addAddress($d_email, $d_nombre);     //Add a recipient
       //$mail->addAttachment('img/programa.png', 'new.jpg');    //Optional name
       //Content
       $mail->isHTML(true);                                 //Set email format to HTML
       // Activo condificacción utf-8
       $mail->CharSet = 'UTF-8';
       $mail->Subject = 'CONFIRMACIÓN DE REGISTRO A LOS FOROS DE VINCULACIÓN 2024..';
      //if ($region == 02)
      //{
        //////////////////////////////////////////////////////////////
        $mail->Body    = '  
        <style>
        h3 {color:black; font-size:14px;}
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      
        font-size: 30px;
      }
      body {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color: rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
      }
      .contenedor {
        width:90%;
        min-height: auto;
        text-align: center;
        margin: 0 auto !important;
        background: #ececec;
        border-top: 8px solid #10312B;
      }
      .btnlink {
        padding: 15px 30px;
        text-align: center;
        background-color: #cecece;
        color: crimson !important;
        font-weight: 600;
        text-decoration: blue;
      }
      .btnlink:hover {
        color: #fff !important;
      }
      .imgBanner {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding: 0px;
      }
      .misection {
        color: #34495e;
        margin: 4% 10% 2%;
        text-align: centlefter;
        font-family: sans-serif;
      }
      .mt-5 {
        margin-top: 50px;
      }
      .mb-5 {
        margin-bottom: 50px;
      }
      </style>
                    
                <div class="contenedor">                    
                 <table class="misection">               
                    <tr>
                       <td align="center" style="padding:20px 0 30px 0; background: linear-gradient(to top ,#10312B,#235b4e);">
                         <img src="http://forosdevinculacion.anuies.mx/img/logo_2024.png" alt="" width="300" style="height:auto;display:block;" />
                       </td>
                    </tr>
                    <tr>
                      <td align="center" style="padding:10px 0 10px 0;">
                      <h3>
                        <p>
                          Apreciable <strong>'.$d_nombre.'</strong> <br> Agradecemos tu participación a los <strong>Foros de Vinculación 2024</strong> <br>Región <strong>'.$_region_name.'</strong> <br> El anfitrion para esta región es:  <strong>'.$d_cede.'</strong>, el cual se llevará a cabo de manera presencial en <br>  <a href = " '.$ubicacion.'">   Da clic para conocer la  ubicacion del evento    </a>
                          
                        </p>
      
                        
                        <h1>Tu folio es:  '.$id_user.'</h1> <p>(el cual se te solicitara el dia del evento)<p>
      
                      </h3>
                      </td>
                    </tr>

                    <tr>
                     <td align="center" style="padding:20px 0 30px 0;">
                     <img src="http://forosdevinculacion.anuies.mx/img/Logos_Institucionales.png" alt="" width="600" style="height:auto;display:block;" />
                     </td>                   
                    </tr>  
      </table>
      
                    <p>¡Nos vemos pronto!</p> 
      </div> ';

        /////////////////////////////////////////////////////////////
      //}
     
      //////////////////////////////////////////////////////////////////////////////////////////////////// 

       $mail->AltBody = 'Confirmación de postulación Foros de Vinculación 2023';
   
       $mail->send();
       
   } catch (Exception $e) {
       echo "Mensaje de error: {$mail->ErrorInfo}";
   }
   
  //  include 'chat/mail.php';
   
  $folio = $id_user; // Reemplaza esto con el valor real del folio
  $region_wp = $_region_name; // Reemplaza esto con la región correspondiente
  $fecha = $_region_fecha; // Reemplaza esto con la fecha correspondiente
  $correo =  $d_email; // Reemplaza esto con el correo correspondiente

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v18.0/248737348321458/messages');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
  'messaging_product' => 'whatsapp',
  'recipient_type' => 'individual',
  'to' => $tel_movil  ,
  'type' => 'template',
  'template' => [
      'name' => 'base',
      'language' => [
          'code' => 'es_MX'
      ],
      'components' => [
          [
              'type' => 'body',
              'parameters' => [
                  [
                      'type' => 'text',
                      'text' => 'Gracias por registrarse en los foros de vinculación de la región *' . $region_wp . '*.\n\nEl cual se llevará a cabo el *' . $fecha . '*.\n\nPor favor, revisa tu bandeja de entrada, ya que toda la información para asistir al evento se encuentra en el correo que se te envió, además adjunto te enviamos tu folio asociado al correo electrónico que se registró.\n\nFolio: *' . $folio . '*\nCorreo: ' . $correo. '\n'
                  ]
              ]
          ]
      ]
  ]
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization: Bearer EAAUNHZA0jLgwBOzg6rkNG2ZA6vrOcDbsP1eWLDyZBIKGsegtvlID97mxfs86O6CYugyqKnZAw3OWrXm3qAAhXmlxWoZARjhNZAOUNXStdl5s8zZCu6zdExwEsiYRPXgwbZBo9DKC3CUYKSbRWf6kwjmYtfd7XSz9sD2XJGYdgOAYh9oIgRN9H1aeMcvdfWN8LZBWwLgJfQhqt6GcZB1eM8',
  'Content-Type: application/json'
]);

$response = curl_exec($ch);
if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
}
curl_close($ch);

echo $response;


   ?>
       <script>
          window.location="datos.php";
       </script>
   
   <?php
   }else{
   
      // $id_usuario =acces_registro($email);
      // $id_user=$id_usuario['id_usuario'];
      // $_SESSION["id"]=$id_usuario['id_usuario'];  
      //   foreach ($id_usuario as $value) {
      //     $estats = $value['tp_estatus_conteo'];
      //   }
      // if ($estats == null) {
      //   header("Location: limite.php");
      // }
   //caso contario (else) es porque ese user ya esta registrado 
    ?>
   <script>
      window.location="existe.php"
   </script>
   <?php
        
      }
      }
  
  

  

   ?>