<?php

    echo '5. Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha: <br>';
    $frase = "web é a melhor matéria";

    echo 'frase: ', $frase, '<br>';

    $palavras = explode(" ", $frase);

    echo "Número de palavras: " . count($palavras) . "<br>";

    foreach ($palavras as $palavra) {
        echo $palavra . "<br>";
    }


?>