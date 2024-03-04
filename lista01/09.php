<?php
require_once '07e09.php';
require_once '08.php';

$txt = "Saíram o tio e oito marias";


function palindromo($txt)
{

  $texto1 = removerDiacriticos($txt);
  $textoLimpo = removerpontuacao($texto1);
  $textoInvertido = strtolower(strrev($textoLimpo));
  echo  $textoInvertido . PHP_EOL;
  echo $txt;
}

$re = palindromo($txt);
print_r($re);
