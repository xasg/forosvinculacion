<?php
//TOKEN QUE NOS DA FACEBOOK
// $token = 'EAAUNHZA0jLgwBOxvwA7yZBNsDVEm2x79vxAIDqxdNJHrwKHov4Anft3kgJNIKhdLfV7YX1BUDMFxjNZAGdLZAyCt82FLqbc690xBdDd7vnI470auUeRrbdDKb951gGZAVe5lYYOQnE4ajF9HZAunPOhYeD3jbAKhrk12OKAQvAElulWynffsL7WpVNylce22rHdSmMSXGQZA4C9KIG7DmuiJ5TNYJjZAExd9ZCpts';
// //NUESTRO TELEFONO
// $telefono = '525511406535';
// //URL A DONDE SE MANDARA EL MENSAJE
// $url = 'https://graph.facebook.com/v18.0/267576596427527/messages';
// //CONFIGURACION DEL MENSAJE
// $mensaje = ''
//         . '{'
//         . '"messaging_product": "whatsapp", '
//         . '"to": "'.$telefono.'", '
//         . '"type": "template", '
//         . '"template": '
//         . '{'
//         . '     "name": "confirm",'
//         . '     "language":{ "code": "en_US" } '
//         . '} '
//         . '}';
// //DECLARAMOS LAS CABECERAS
// $header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
// //INICIAMOS EL CURL
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
// curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// //OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
// $response = json_decode(curl_exec($curl), true);
// //IMPRIMIMOS LA RESPUESTA 
// print_r($response);
// //OBTENEMOS EL CODIGO DE LA RESPUESTA
// $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
// //CERRAMOS EL CURL
// curl_close($curl);

?>

<?php

// Require the Composer autoloader.
require 'vendor/autoload.php';

use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

// Instantiate the WhatsAppCloudApi super class.
$whatsapp_cloud_api = new WhatsAppCloudApi([
    'from_phone_number_id' => '267576596427527',
    'access_token' => 'EAAUNHZA0jLgwBOzg6rkNG2ZA6vrOcDbsP1eWLDyZBIKGsegtvlID97mxfs86O6CYugyqKnZAw3OWrXm3qAAhXmlxWoZARjhNZAOUNXStdl5s8zZCu6zdExwEsiYRPXgwbZBo9DKC3CUYKSbRWf6kwjmYtfd7XSz9sD2XJGYdgOAYh9oIgRN9H1aeMcvdfWN8LZBWwLgJfQhqt6GcZB1eM8',
]);

if ($whatsapp_cloud_api->sendTemplate('525511406535', 'confirm', 'en_US')) {
        echo "Mensaje enviado";        # code...
}
