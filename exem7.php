<?php 
echo '7. Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por ?';
echo '<br>';
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 3 == 0) {
            echo "? ";
        } else {
            echo "$i ";
        }
    }
?>