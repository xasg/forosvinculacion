<?php 

// session_start();



require ('../contanciasForos2023/pdf/fpdf.php');
require ('../PHPMailer/PHPMailer.php');
require ('../PHPMailer/SMTP.php');
require ('../PHPMailer/Exception.php');

include_once('../contanciasForos2023/databases_usuario.php');
include_once('random.php');

if($_POST){
// $id = $_POST['id_usuario'];
$numero = rand(100,999);
$letra = randomLetter();
$simbolo = randomSymbol();
$aleatorio = $numero.$letra.$simbolo;
$hash = str_shuffle($aleatorio);
// $id = $_POST['id_usuario'];
$id = $id_usuario;
$id_hash = $id.$hash;
$participante = run_participante_2024($id);

$pdf = new FPDF('P','mm','A4');
$pdf->AddFont('Montserrat','','Montserrat.php');
$pdf->SetTextColor(0,0,0);
$pdf->AddPage();

if ($participante['dt_region'] == 01) {
    $pdf->Image('../constanciasForos2024/img/sur_sureste.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region'] == 02) {
    $pdf->Image('../constanciasForos2024/img/centro_sur.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region'] == 03) {
    $pdf->Image('../constanciasForos2024/img/centro_occidente.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region'] == 04) {
    $pdf->Image('../constanciasForos2024/img/noreste.png',0,0,210,300,'PNG');
} elseif ($participante['dt_region'] == 05) {
    $pdf->Image('../constanciasForos2024/img/noroeste.png',0,0,210,300,'PNG');
} else {
    $pdf->Image('../constanciasForos2024/img/metropolitana.png',0,0,210,300,'PNG');
}

$pdf->SetFont('Montserrat','',35);
$pdf->SetTextColor(87,86,86);
$pdf->Cell(0,215,utf8_decode($participante['dt_nombre']),0,0,'C');
$pdf->Ln(125);
$pdf->Cell(0,0,utf8_decode($participante['dt_apaterno'])." ".utf8_decode($participante['dt_amaterno']),0,0,'C');
$Y = $pdf->GetY();

// Guardar el PDF en una variable
$pdf_data = $pdf->Output('certificado','S');

// Ruta donde se guardará el certificado
$certificado_path = realpath(__DIR__ . '/../certificados') . DIRECTORY_SEPARATOR;

// Crear la carpeta "certificados" si no existe
if (!file_exists($certificado_path)) {
    mkdir($certificado_path, 777, true);
}

// Guardar el PDF en la carpeta "certificados"
$certificado_file = $certificado_path . 'certificado_' . $id_hash . '.pdf';
file_put_contents($certificado_file, $pdf_data);

// URL del certificado
$certificado_url = 'http://forosdevinculacion.anuies.mx/certificados/certificado_' . $id_hash . '.pdf';

// Configuración de PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'forosdevinculacion@vinculacion.website';                     //SMTP username
$mail->Password   = 'HeVr1043D#';                               //SMTP password
$mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
$mail->Port       = 465;   

// Configuración del correo
$mail->setFrom('forosdevinculacion@vinculacion.website', 'FOROS DE VINCULACION 2024');
$mail->addAddress('alexis@fese.mx', 'Nombre Destinatario');
$mail->Subject = 'CONSTANCIA - FOROS DE VINCULACION 2024';
$mail->Body = 'Gracias por participar en los foros de vinculación 2024, adjunto le hacemos envio de su constancia.';
$mail->addStringAttachment($pdf_data, 'certificado.pdf', 'base64', 'application/pdf');

// Enviar el correo
if ($mail->send()) {
    echo 'Correo enviado correctamente';
} else {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}

$ch = curl_init();

// telefono
$tel_movil = $_POST['tel_movil'];
    
// Mensaje de texto
$message = 'Adjunto te enviamos tu certificado. Puedes descargarlo aquí: ' . $certificado_url;

// Configuración de la solicitud CURL
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v18.0/248737348321458/messages');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'messaging_product' => 'whatsapp',
    'recipient_type' => 'individual',
    // 'to' => $tel_movil,
    'to' => '5511406535',
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
                        'text' => $message
                    ],
                    
                ]
            ],
        ]
    ]
]));

// Encabezados de la solicitud CURL
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer EAAUNHZA0jLgwBOzg6rkNG2ZA6vrOcDbsP1eWLDyZBIKGsegtvlID97mxfs86O6CYugyqKnZAw3OWrXm3qAAhXmlxWoZARjhNZAOUNXStdl5s8zZCu6zdExwEsiYRPXgwbZBo9DKC3CUYKSbRWf6kwjmYtfd7XSz9sD2XJGYdgOAYh9oIgRN9H1aeMcvdfWN8LZBWwLgJfQhqt6GcZB1eM8',
    'Content-Type: application/json'
]);

// Ejecutar la solicitud CURL
$response = curl_exec($ch);
echo $response;
// Verificar errores
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Cerrar la conexión CURL
curl_close($ch);
// header('Location: ../asistencia.php?asistencias=validada');
}
?>
