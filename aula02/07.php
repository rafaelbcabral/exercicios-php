<?php
     $frutas = ['banana', 'maca', 'Abacate'];
    
    $resposta = readline("fruta: banana, maca, abacate");

    foreach( $frutas as $chave => $valor) {
        if($resposta === $valor) {
            unset($frutas[$chave]); 
            echo var_dump($frutas);
    }
}

?>