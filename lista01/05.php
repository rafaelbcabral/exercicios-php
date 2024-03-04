<?php function contarPalavras($dados)
{
  $contagem = [];

  foreach ($dados as $palavra) {
    if (array_key_exists($palavra, $contagem)) {
      $contagem[$palavra]++;
    } else {
      $contagem[$palavra] = 1;
    }
  }

  return $contagem;
}
