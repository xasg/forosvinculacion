<?php
session_start();

// Verificar si el mensaje ya se ha enviado
if (isset($_SESSION['message_sent'])) {
    // El mensaje no se ha enviado, procede con el envío
    $folio = '12345'; // Reemplaza esto con el valor real del folio
    $region = 'Metropolitana'; // Reemplaza esto con la región correspondiente
    $fecha = '30 de abril'; // Reemplaza esto con la fecha correspondiente
    $correo = 'ejemplo@correo.com'; // Reemplaza esto con el correo correspondiente

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v19.0/244108468790958/messages');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'messaging_product' => 'whatsapp',
        'recipient_type' => 'individual',
        'to' => '525637269723',
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
                            'text' => 'Gracias por registrarse en los foros de vinculación de la región *' . $region . '*.\n\nEl cual se llevará a cabo el *' . $fecha . '*.\n\nPor favor, revisa tu bandeja de entrada, ya que toda la información para asistir al evento se encuentra en el correo que se te envió, además adjunto te enviamos tu folio asociado al correo electrónico que se registró.\n\nFolio: *' . $folio
                        ]
                    ]
                ]
            ]
        ]
    ]));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer EAAUNHZA0jLgwBO7qVKoxOmo3hSg5jFAwnG3Y5JXJHeE3WnpwvuFXKFLkhIZCjanSbNZCLJqyFANlo2ckPEu6D5SNZBarobiAbosn454YUPF1co8JpX2epyhiuEgLBFIdrK6IPyaFQ8RrrwEas1jVYFXZBHavO5dymrZCDPyCIesdZCBoZBW4XEyJZBZCVb9CMf8azJSaZC5PRTybF0uJ1WurA0ZD',
        'Content-Type: application/json'
    ]);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    echo $response;

    // Marcar el mensaje como enviado para evitar envíos duplicados
    $_SESSION['message_sent'] = true;
} else {
    // El mensaje ya se ha enviado, mostrar un mensaje de error o redireccionar
    echo 'El mensaje ya se ha enviado.';
}
?>
