<?php

function calcularA($x, $y) {
    return (1 / $x) + (($x + $y) / 3) + 2 * ($x / $y);
}

function calcularB($x) {
    return (((1 / 2) * $x) + (((3 + $x) / 2) * (2 * pow($x, 2)))) / ((2 + 3) * $x);
}
function calcularC($x) {
    $op1 = 2 * $x;
    return (sqrt(pow($op1, 2) + pow(3, 2)) / 5) + sqrt(pow($x, 2));
}

function calcularD($x) {
    return (((1 / 2) + (1 / 4) + (1 / 8)) * pow($x, 1/3)) / ((sqrt($x) / 2) + (3 * pow($x, 2) / 4));
}

function calcularE($x) {
    $op2 = ((pow($x, 2) / 2) + (1 / sqrt($x))) / (3 + (1 / 2) * pow($x, 3));
    return sqrt($op2);
}
//isset determina si una variable está definida y tiene un valor 
$x = isset($_GET["x"]) ? $_GET["x"] : 2;
$y = isset($_GET["y"]) ? $_GET["y"] : 4;

$resultadoA = calcularA($x, $y);
$resultadoB = calcularB($x);
$resultadoC = calcularC($x);
$resultadoD = calcularD($x);
$resultadoE = calcularE($x);
?>

<html>
<head>
    <title>Uso de variables como referencia a valores</title>
    <h5>Cruz Martínez Aleitia Yari</h5>
    <h3>Intrucciones: Declara las variables mostradas y asígnales el valor mostrado. Codifica todo en un solo programa</h3>
  
</head>
<body>
    <p>a.- Valor para X = <?php echo $x ?>, Y = <?php echo $y ?>  Resultado = <?php echo $resultadoA ?> </p>
    <img src="/img/incisoA.png" width="400" height="100">

    <p>b.- Valor para X = <?php echo $x ?>  Resultado = <?php echo $resultadoB ?> </p>
    <img src="/img/incisoB.png" width="400" height="170">

    <p>c.- Valor para X = <?php echo $x ?>  Resultado = <?php echo $resultadoC ?> </p>
    <img src="/img/incisoC.png" width="400" height="190">

    <p>d.- Valor para X = <?php echo $x ?> Resultado = <?php echo $resultadoD ?> </p>
    <img src="/img/incisoD.png" width="400" height="200">

    <p>e.- Valor para X = <?php echo $x ?> Resultado = <?php echo $resultadoE ?> </p>
    <img src="/img/incisoE.png" width="400" height="200">
</body>
</html>