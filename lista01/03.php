<?php

require_once '01.php';
$arr = [30044000, 30044000, 30044000, 30044000];



function repetidos($arr)
{

  $contagem = 0;
  $repetidos = [];
  $telefone = [];

  foreach ($arr as $numeros) {
    $telefone[] = telefone($numeros);
  }

  foreach ($telefone as $formatados) {

    if (array_key_exists($formatados, $repetidos)) {
      $contagem[$formatados]++;
    } else {
      $contagem[$formatados] = 1;
    }
  }
  return $formatados;
}

$resultado = repetidos($arr);
