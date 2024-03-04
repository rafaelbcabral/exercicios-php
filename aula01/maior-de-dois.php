<?php

function maiorDeDois($n1, $n2){

if ($n1 > $n2) {
    echo "O número maior entre eles é: $n1";

}else {
    echo "O número maior entre eles é: $n2";
}

}

$n1 = readline('Número 1: ' );
$n2 = readline('Número 2: ' );

echo "O número maior entre eles é: ", maiorDeDois($n1, $n2);
?>