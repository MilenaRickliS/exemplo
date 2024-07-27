<?php
    function inverterString($str) {
        $invertida = '';
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $invertida .= $str[$i];
        }
        return $invertida;
    }


    $str = 'milena';
    echo inverterString($str); 


?>