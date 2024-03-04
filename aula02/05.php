<?php
    $frutas = ['banana', 'maca', 'Abacate' ];

    $respostas = readline("Digite o nome de uma fruta: Banana, maca ou Abacate.");

        foreach( $frutas as $chave => $valor) {
            if(isset($frutas)){
                echo "encontrado"; break;
            }else{
                echo "não encontrado"; 
            }
            

    }
        
?>