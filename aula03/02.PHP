<?php
    require_once 'produtos.php';
    require_once '01.php';
    require_once '03.PHP';

    const SAIR_DA_FUNCAO = 0;
    const  PESQUISAR_FUNCAO = 1;
    const  LISTAR_FUNCAO = 2;
    const CADASTRAR_PRODUTO = 3;

    echo '0) SAIR'. PHP_EOL;
    echo '1) PESQUISAR'. PHP_EOL;
    echo '2) LISTAR'. PHP_EOL;
    echo '3) CADASTRAR'. PHP_EOL;
    $escolha2 = readline('Digite aqui sua escolha para as opcoes acima: ');

    switch($escolha2) {
        case SAIR_DA_FUNCAO:
            echo "saindo da funcao";
        break;
        case PESQUISAR_FUNCAO:
            $escolha1 = readline('Digite a descricao do produto ou o codigo do produto: ');
            echo descricao($produtos, $escolha1);
        break;
        case LISTAR_FUNCAO:
            echo listar($produtos);
        break;
        case CADASTRAR_PRODUTO:
            echo cadastrar($produtos);
        break;
        }
?>