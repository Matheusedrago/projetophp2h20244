<?php 
$nome = "matheus";
$altura = "1.70";
$peso = "80";

function calcular($num1,$num2,$num3){
    return ($num1 / ($num2 * $num3));
}
$resp = calcular ($peso,$altura,$altura);

if($resp <= 18.5) {
    echo "Você está abaixo do peso <br />";
}
elseif ($resp >= 18.6 && $resp <= 24.9) {
    echo "peso ideal (parabens!) <br />";
}
elseif ($resp >= 25.0 && $resp <= 29.9) {
    echo "levemente acima do peso <br />";
}
elseif ($resp >= 30.0 && $resp <= 34.9) {
    echo "obesidade grau 1 <br />";
}
elseif ($resp >= 35.0 && $resp <= 39.9) {
    echo "obesidade grau 2 (severa) <br />";
}
elseif ($resp >= 40.0) {
    echo "obesidade morbida <br />";
}

printf ("Olá $nome seu peso $peso sua altura $altura, seu imc %.2f",$resp);

 ?>