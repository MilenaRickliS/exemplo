<?php

    $frase = "web é a melhor matéria";

    echo $frase, '<br>';

    $palavras = explode(" ", $frase);

    echo "Número de palavras: " . count($palavras) . "\n";

    foreach ($palavras as $palavra) {
        $palavra . "\n";
    }


?>