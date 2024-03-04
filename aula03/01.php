<?php
require_once 'produtos.php';

function descricao($produtos, $escolha1){

    for($i=0; $i < count($produtos); $i++){
    
// $produtos[$i];
    if($escolha1 == $produtos[$i]['descricao'] || $escolha1 == $produtos[$i]['codigo']){
    echo $produtos[$i]['descricao'], PHP_EOL;
    echo $produtos[$i]['preco'] , PHP_EOL;
    echo $produtos[$i]['estoque'], PHP_EOL;
    echo $produtos[$i]['codigo'], PHP_EOL;
}

}

}

function listar ($produtos){
    $sumEstoque = 0;
    $sumPreco = 0;
    for($i=0; $i < count($produtos); $i++){
        $sumEstoque = $produtos[$i]['estoque'] += $produtos[$i]['estoque'];
        $sumPreco = $produtos[$i]['preco'] *= $sumEstoque;
        echo "A quantidade no estoque total é: " . $sumEstoque . PHP_EOL;
        echo "O preço final de todo o estoque é " .$sumPreco . PHP_EOL;
    }
}



?>