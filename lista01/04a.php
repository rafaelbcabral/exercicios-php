<?php

$inventores = [
  [
    "nome" => 'Albert', "sobrenome" => 'Einstein', "nasc" => 1879,
    "morte" => 1955
  ],
  [
    "nome" => 'Isaac', "sobrenome" => 'Newton', "nasc" => 1643,
    "morte" => 1727
  ],
  [
    "nome" => 'Galileo', "sobrenome" => 'Galilei', "nasc" => 1564,
    "morte" => 1642
  ],
  [
    "nome" => 'Nicolaus', "sobrenome" => 'Copernicus', "nasc" => 1473,
    "morte" => 1543
  ],
  [
    "nome" => 'Ada', "sobrenome" => 'Lovelace', "nasc" => 1815,
    "morte" => 1852
  ]
];

function anosvividos($inventores)
{
  $acumulador = [];

  foreach ($inventores as $invent) {
    $acumuladorS = $invent['sobrenome'] . PHP_EOL;
    $acumuladorV = ($invent['morte'] - $invent['nasc']) . PHP_EOL;
    $si = ['sobrenome' => $acumuladorS, 'viveu' => $acumuladorV];
    $acumulador[] = $si;
  }

  return $acumulador;
}
