<?php

$texto = " B r eaking bad,-.;:!?";
$retirar = ",-.;:!?";


function removerpontuacao($texto)
{
  $formatada1 = str_ireplace(' ', '', $texto);
  $formatada2 = str_ireplace(',-.;:!?', '', $formatada1);
  $resultado = $formatada2;

  return $resultado;
}
