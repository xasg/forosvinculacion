<?php
// Función para generar una letra aleatoria
function randomLetter() {
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return $letters[rand(0, strlen($letters) - 1)];
}

// Función para generar un símbolo aleatorio
function randomSymbol() {
    $symbols = '!@#$&_';
    return $symbols[rand(0, strlen($symbols) - 1)];
}

// Generar un número aleatorio de 3 dígitos
$numero = rand(100, 999);

// Agregar una letra aleatoria
$letra = randomLetter();

// Agregar un símbolo aleatorio
$simbolo = randomSymbol();

// Combinar los elementos en un solo string
$numero_aleatorio = $numero . $letra . $simbolo;

// Mezclar el string para que los elementos estén en orden aleatorio
$numero_aleatorio = str_shuffle($numero_aleatorio);

echo "Número aleatorio de 3 dígitos alfanumérico con al menos un número, una letra y un símbolo: $numero_aleatorio";
?>
