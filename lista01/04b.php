<?php

require_once '04a.php';

function mediadeidade($inventores)
{
  $totalIdades = 0;
  $qtd = 1;

  foreach ($inventores as $invent) {

    $idade = (int) $invent['morte'] - $invent['nasc'];
    $totalIdades += $idade;
  }

  $qtd += (int) count($invent);

  $conta = $totalIdades / $qtd;

  return $conta;
}

$resultado = mediadeidade($inventores);

echo $resultado;
