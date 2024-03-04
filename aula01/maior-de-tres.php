<?php
    require_once 'maior-de-dois.php';
    
    function maiorDeTres ($n1, $n2, $n3) {
        return maiorDeDois( maiorDeDois($n1, $n2 ), $n3 );
    }
