<?php

require_once 'repositorioEmBancoDeDados.php';
require_once "conexao.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];

try {
  $pdo = conectar();
} catch (PDOException $e) {
  die("erro" . $e->getMessage());
}

$repositorio = new repositorioEmBancoDeDados($pdo);

if ($metodo === 'DELETE' && preg_match('/^\/frases\/([0-9]\/?$/i', $url, $casamentos)) {

  $corpo = file_get_contents('php://input');
  $dados = [];
  mb_parse_str($corpo, $dados);

  [, $nota] = $casamentos;

  $ok = $repositorio->removerFraseComNotaMenorOuIgualA($nota);

  if ($ok) {
    http_response_code(201);
    die("deletado");
  } else {
    http_response_code(500);
    die("erro");
  }
} elseif ($metodo === 'PUT' && preg_match('/^\/frases\/([0-9])\/?$/i', $url, $casamentos)) {

  $corpo = file_get_contents('php://input');
  $dados = [];
  mb_parse_str($corpo, $dados);

  [, $id] = $casamentos;
  $nome  = isset($dados['autor'])  ? $dados['autor']  : '';
  $frase = isset($dados['frase']) ? $dados['frase'] : '';
  $ok = $repositorio->atualizar($autor, $frase, $id);

  if ($ok) {
    http_response_code(201);
    die("att");
  } else {
    http_response_code(500);
    die("erro");
  }
} elseif ($metodo === 'POST' && preg_match('/^\/frases\/?$/i', $url)) {

  $nome  = isset($_POST['autor'])  ? $_POST['autor']  : '';
  $frase = isset($_POST['frase']) ? $_POST['frase'] : '';
  $ok = $repositorio->cadastrar($nome, $frase);

  if ($ok) {
    http_response_code(201);
    die("att");
  } else {
    http_response_code(500);
    die("erro");
  }
} elseif ($metodo === 'GET' && preg_match('/^\/frases\/([0-9])\/?$/i', $url)) {
  $cabecalhos = getallheaders();
  $formato = isset($cabecalhos['Accept'])
    ? $cabecalhos['Accept']
    : 'text/html';
  if ($formato == 'application/json') {
    $games = $repositorio->obterTodos();
    header('Content-Type: application/json');
    echo json_encode($games);
  }
} else {
  include_once 'listagem.php';
}
