<?php 
    function verificarSinal($numero) {
        if ($numero > 0) {
            return 'Positivo';
        } elseif ($numero < 0) {
            return 'Negativo';
        } else {
            return 'Zero';
        }
    }

echo 'Exemplo 8: ';
echo verificarSinal(8); 
echo '<br>';
echo 'Exemplo -6: ';
echo verificarSinal(-6); 
echo '<br>';
echo 'Exemplo 0: ';
echo verificarSinal(0); 

?>