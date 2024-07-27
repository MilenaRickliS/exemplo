<?php 
    function isPalindromo($palavra) {
        $palavra = strtolower($palavra); 
        $reverso = strrev($palavra); 
        return $palavra === $reverso; // verifica se a palavra é igual ao seu reverso
    }

echo 'Verifica se palavra é um palíndromo:';
echo '<br>';
echo 'Exemplo ana: ';
echo isPalindromo("ana") ? "É um palíndromo" : "Não é um palíndromo"; 
echo '<br>';
echo 'Exemplo milena: ';
echo isPalindromo("milena") ? "É um palíndromo" : "Não é um palíndromo"; 


?>