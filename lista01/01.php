<?php


// $resposta = readline('Digite um número de 8 digitos, 10 digitos, 11 digitos ou 11 digitos porém comecando com 0800: ');

function telefone($resposta)
{
  $respostacontada = strlen($resposta);

  if ($respostacontada < 8) {
    return $resposta;
  } elseif ($respostacontada == 8) {
    $pedaco1 = substr($resposta, 0, 4);
    $pedaco2 = substr($resposta, 4, 4);

    return "$pedaco1 $pedaco2";
  } elseif ($respostacontada == 10) {
    $pedacoddd = substr($resposta, 0, 2);
    $pedaconumero = substr($resposta, 2, 4);
    $pedaconumero2 = substr($resposta, 4, 4);

    return "($pedacoddd)$pedaconumero-$pedaconumero2";
  } elseif ($respostacontada == 11) {
    if (substr($resposta, 0, 4) == '0800' or substr($resposta, 0, 4) == '0300') {
      $pedaco0800 = substr($resposta, 0, 4);
      $pedaco1 = substr($resposta, 4, 3);
      $pedaco2 = substr($resposta, 7, 4);

      return "$pedaco0800 $pedaco1 $pedaco2";
    } else {
      $pedacoddd = substr($resposta, 0, 2);
      $pedaco1 = substr($resposta, 2, 1);
      $pedaco2 = substr($resposta, 3, 4);
      $pedaco3 = substr($resposta, 7, 4);

      return "($pedacoddd) $pedaco1-$pedaco2-$pedaco3";
    }
  } else {
    return $resposta;
  }
}

//$resultado = telefone($resposta);
//echo $resultado;
