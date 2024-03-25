<?php 
$nome = "matheus";
$altura = "1.70";
$peso = "80";

function calcular($num1,$num2,$num3){
    return ($num1 / ($num2 * $num3));
}
$resp = calcular ($peso,$altura,$altura);

printf ("Olá $nome seu peso $peso sua altura $altura, seu imc %.2f",$resp);


 ?>