<?php 
    function removeEspacos($string) {
        return str_replace(" ", "", $string);
    }

echo 'Crie uma função que remova os espaços em branco de uma string: ';    
$string = "Hoje é Sexta-Feira! ";
echo removeEspacos($string); 

?>