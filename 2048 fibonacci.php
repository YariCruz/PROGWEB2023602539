<?php
// Cantidad de números de Fibonacci a generar
$cantidad = 2048;

// Inicializar los dos primeros números de Fibonacci
$primerNumero = 0;
$segundoNumero = 1;

// Mostrar los dos primeros números
echo $primerNumero . "\n";
echo $segundoNumero . "\n";

// Generar y mostrar los siguientes números de Fibonacci
for ($i = 2; $i < $cantidad; $i++) {
    $siguienteNumero = $primerNumero + $segundoNumero;
    echo $siguienteNumero . "\n";
    
    // Actualizar los valores para la siguiente iteración
    $primerNumero = $segundoNumero;
    $segundoNumero = $siguienteNumero;
}
