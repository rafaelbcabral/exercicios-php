<?php

//Crie uma função removerDiacriticos que remova de um texto, fornecido por
//parâmetro, os diacríticos de vogais acentuadas com acento agudo, acento grave, trema,
//acento circunflexo e til, além de remover a cedilha da consoante c.


$texto = "áãâàÁÀÃÂçÇéêèÉÊÈíÎìÍòôõÓÔÕúÛÙ texto ";


function removerDiacriticos($texto)
{
  $textoFormatado = str_ireplace('áãâàÁÀÃÂçÇéêèÉÊÈíÎìÍòôõÓÔÕúÛÙ', 'aaaaAAAAcCeeeEEEiIiIoooOOOuUU', $texto);
  return $textoFormatado;
}
