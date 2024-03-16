<?php

// // Incluye la librería de PHP QR Code
// require 'phpqrcode/qrlib.php';

// // Define una función para generar y guardar el código QR
// function generarQR($url, &$id) {
//     // Verifica si la carpeta qrimages existe, si no, la crea
//     if (!file_exists('qrimages')) {
//         mkdir('qrimages', 0777, true);
//     }

//     // Nombre del archivo con el ID del contador
//     $filename = 'qrimages/qr_' . $id . '.png';

//     // Genera el QR Code y lo guarda en un archivo
//     QRcode::png($url, $filename);

//     // Incrementa el contador de uso del ID
//     $id++;

//     // Devuelve el nombre del archivo de imagen
//     return $filename;
// }

// // URL que se convertirá en QR
// $url = 'http://forosdevinculacion.anuies.mx/recuperar_folio.php';

// // Archivo que guarda el ID actual
// $id_file = 'qrimages/id.txt';

// // Lee el ID actual desde el archivo o inicializa en 1 si no existe
// $id = file_exists($id_file) ? intval(file_get_contents($id_file)) : 1;

// // Genera y guarda el QR Code en un archivo
// $filename = generarQR($url, $id);

// // Guarda el ID actualizado en el archivo
// file_put_contents($id_file, $id);

// // Devuelve el nombre del archivo de imagen generado
// echo $filename;


session_start();
$region = $_SESSION['region'];

require 'phpqrcode/qrlib.php';

function generarQR($url, &$id) {
    if (!file_exists('qrimages')) {
        mkdir('qrimages', 0777, true);
    }

    $filename = 'qrimages/qr_' . $id . '.png';

    if (file_exists($filename)) {
        unlink($filename);
    }

    QRcode::png($url, $filename);

    $id++;

    return $filename;
}

// $url = 'http://forosdevinculacion.anuies.mx/recuperar_folio.php';
$url = 'http://forosdevinculacion.anuies.mx/recuperar_folio.php?idregion='.$region.'';
$id_file = 'qrimages/id.txt';
$id = file_exists($id_file) ? intval(file_get_contents($id_file)) : 1;
$filename = generarQR($url, $id);
file_put_contents($id_file, $id);

// Devuelve el nombre del archivo de imagen generado
echo $filename;

// header('location: recuperar_folio.php?idregion='.$region.'');

// session_start();
// $region = $_SESSION['region'];
// require 'phpqrcode/qrlib.php';

// // $region = $_REQUEST['region'];

// function generarQR($url) {
//     if (!file_exists('qrimages')) {
//         mkdir('qrimages', 0777, true);
//     }

//     $filename = 'qrimages/qr.png';

//     if (file_exists($filename)) {
//         unlink($filename);
//     }

//     QRcode::png($url, $filename);

//     return $filename;
// }

// $url = 'http://forosdevinculacion.anuies.mx/recuperar_folio.php?idregion="'.$region.'"';
// $filename = generarQR($url);

// header('location: recuperar_folio.php?idregion='.$region.'');

?>
