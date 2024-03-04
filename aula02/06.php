<?php

        $frutas = [0 =>'banana', 'maca', 'Abacate' ];

        $resposta = readline("Digite o nome de uma fruta: banana, maca ou Abacate.");

        
        
            foreach( $frutas as $chave => $valor) {
                if($resposta === $valor){
                    echo "encontrado no indice $chave"; break;
                }else{
                    echo "não encontrado"; break;
                }
                
    
        }
?>