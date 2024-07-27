<?php

    function inverterString($str) {
        $invertida = '';
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $invertida .= $str[$i];
        }
        return $invertida;
    }

    echo '3. Inverta uma string sem usar a função strrev(): ';
    $str = 'milena';
    echo inverterString($str); 


?>