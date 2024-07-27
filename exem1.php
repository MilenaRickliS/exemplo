<?php

    echo '1. Substitua todas as vogais em uma string por asteriscos (*): ';
    echo '<br>';
    $string = 'milena';
    $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    echo 'Original: ', $string;

    foreach($vogais as $vogal){
        $string = str_replace($vogal, '*', $string);
    }

    echo '<br>';
    echo 'Vogais substituidas por *: ',$string;

?>