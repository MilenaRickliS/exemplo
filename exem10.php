<?php 

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


echo $text = "abcdefghijlmnopqrstuvxz";
echo '<br>';

if (isPangram($text)) {
    echo "O texto é um pangrama!";
} else {
    echo "O texto não é um pangrama.";
}

?>