<?php

function obtenerDia($id_reg, $fecha) {
    switch ($id_reg) {
        case '01':
            if ($fecha == '04-11' || $fecha == '04-12') {
                $dia = ($fecha == '04-11') ? 1 : 2;
            } else {
                $dia = 'Fuera de la fecha';
            }
            break;
        case '02':
            if ($fecha == '05-01' || $fecha == '07-09') {
                $dia = ($fecha == '05-01') ? 1 : 2;
            } else {
                $dia = 'Fuera de la fecha';
            }
            break;
        case '03':
            if ($fecha == '05-16' || $fecha == '03-22') {
                $dia = ($fecha == '05-16') ? 1 : 2;
            } else {
                $dia = 'Fuera de la fecha';
            }
            break;
        case '04':
            if ($fecha == '07-01' || $fecha == '08-20') {
                $dia = ($fecha == '07-01') ? 1 : 2;
            } else {
                $dia = 'Fuera de la fecha';
            }
            break;
        case '05':
            if ($fecha == '01-11' || $fecha == '01-12') {
                $dia = ($fecha == '01-11') ? 1 : 2;
            } else {
                $dia = 'Fuera de la fecha';
            }
            break;
        case '06':
            if ($fecha == '02-11' || $fecha == '02-12') {
                $dia = ($fecha == '02-11') ? 1 : 2;
            } else {
                $dia = 'Fuera de la fecha';
            }
            break;
        default:
            $dia = 'Región no válida';
            break;
    }
    return $dia;
}

// Uso de la función
// $fecha = '02-12';
// $id_reg = '06';
// echo obtenerDia($id_reg, $fecha);

?>
