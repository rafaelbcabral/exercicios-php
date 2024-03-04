<?php
/*
Crie uma função que receba, via passagem por referência, um array de números de
telefone não formatados e formate cada telefone desse array com a função construída
anteriormente.
*/

require_once '01.php';

$arr = [22988103858, 22988652265, 22999566806, 22999566806, 22999566806, 22988652265];

function formatar(&$arr)
{
  $formatados = [];
  foreach ($arr as $numeros) {
    $formatados[] = telefone($numeros) . PHP_EOL;
  }
  return $formatados;
}

$re = formatar($arr);
print_r($re);
