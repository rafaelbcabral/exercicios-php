<?php

$data = '24/07/2003';


    function dataPorExtenso($data){

        $dataComBarra = explode("/", $data);

        $dataSemBarra = implode("-", $dataComBarra);

        return $dataSemBarra;

    }
        
    echo dataPorExtenso($data). PHP_EOL;

?>