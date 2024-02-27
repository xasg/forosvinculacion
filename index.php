<?php
require 'vendor/autoload.php';

use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

if ($_POST) {
    $region = isset($_POST['region']) ? $_POST['region'] : 'null';
    $numero = isset($_POST['numero']) ? $_POST['numero'] : 'null';
    $numero_WPAPI= '52'.$numero ;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : 'null';
    switch ($region) {
        case '01':
            $regiol_WPAPI  = 'confirm';
            break;
        case '02':
            $regiol_WPAPI  = 'confirm3';
            break;
        case '03':
            $regiol_WPAPI  = 'confirm4';
            break;
        case '04':
            $regiol_WPAPI  = 'confirm6';
            break;
        case '05':
            $regiol_WPAPI  = 'confirm7';
            break;
        case '06':
            $regiol_WPAPI  = 'confirm8';
            break;
        default:
            $regiol_WPAPI = ''; // Valor por defecto en caso de que $region no coincida con ninguno de los casos anteriores
            break;
    }
    
    // Instantiate the WhatsAppCloudApi super class.
    $whatsapp_cloud_api = new WhatsAppCloudApi([
        'from_phone_number_id' => '244108468790958',
        'access_token' => 'EAAUNHZA0jLgwBOzg6rkNG2ZA6vrOcDbsP1eWLDyZBIKGsegtvlID97mxfs86O6CYugyqKnZAw3OWrXm3qAAhXmlxWoZARjhNZAOUNXStdl5s8zZCu6zdExwEsiYRPXgwbZBo9DKC3CUYKSbRWf6kwjmYtfd7XSz9sD2XJGYdgOAYh9oIgRN9H1aeMcvdfWN8LZBWwLgJfQhqt6GcZB1eM8',
    ]);

    if ($whatsapp_cloud_api->sendTemplate($numero_WPAPI, $regiol_WPAPI, 'en_US') && $whatsapp_cloud_api->sendTextMessage('525637269723', "Tu folio es: *542*\nCorreo Asociado: alexis@fese.mx")) {
        echo 'Confirmación enviada por WhatsApp';
    }
}
?>
