<?php 

    echo '10. Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez): <br>';
    
    function isPangram($text) {
        $alphabet = range('a', 'z'); 
        $text = strtolower($text); 
    
        foreach ($alphabet as $letter) {
            if (strpos($text, $letter) === false) {
                return false; 
            }
        }
    
        return true; 
    }
    
    echo $text = "Jane quer LP, fax, CD, giz, TV e bom whisky.";
    echo '<br>';
    if (isPangram($text)) {
        echo "O texto é um pangrama!";
    } else {
        echo "O texto não é um pangrama.";
    }
    echo '<br>';
    echo $text2 = "Jovem ex-quenga picha frase da Blitz.";
    echo '<br>';
    if (isPangram($text2)) {
        echo "O texto é um pangrama!";
    } else {
        echo "O texto não é um pangrama.";
    }

?>