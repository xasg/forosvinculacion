<?php
$id = 2;
// URL del certificado
$certificado_url = 'http://tu-sitio.com/certificados/certificado_' . $id . '.pdf';


$ch = curl_init();

// telefono
// $tel_movil = "5511406535";
    
// Mensaje de texto
$message = 'Adjunto te enviamos tu certificado. Puedes descargarlo a: ' . $certificado_url;

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
            ]
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



?>