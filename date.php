<?php
date_default_timezone_set('Europe/London');

if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone');
}
echo("<br>");
date_default_timezone_set('America/Mexico_City');
echo date_default_timezone_get() . ' => ' . date('e') . ' => ' . date('T');