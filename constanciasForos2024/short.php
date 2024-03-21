<?php
function shortenUrl($region) {
    $base = 'http://forosdevinculacion.anuies.mx/docs/';
    $file = 'Anfitrionia'.$region.'.pdf';
    $url = $base . $file;
    $hash = md5($url); // Hashear la URL
    return $hash;
}

// Ejemplo de uso
$region = '02';
$shortUrl = shortenUrl($region);
echo $shortUrl;
echo '<a href="'.$shortUrl.'" download>Descargar</a>';
