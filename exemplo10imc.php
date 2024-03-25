<?php 
$nome = "matheus";
$altura = "1.70";
$peso = "80";

function calcular($num1,$num2,$num3){
    return ($num1 / ($num2 * $num3));
}
$resp = calcular ($peso,$altura,$altura);

echo "Olá $nome seu $peso sua $altura, seu imc $resp";


 ?>