<?php

    $string = 'milena';
    $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    echo 'Original: ', $string;

    foreach($vogais as $vogal){
        $string = str_replace($vogal, '*', $string);
    }

    echo '<br>';
    echo 'Vogais substituidas por *: ',$string;

?>