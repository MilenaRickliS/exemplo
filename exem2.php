<?php
    echo 'Verifica se número é primo: ';
    echo '<br>';
    $numero = 23;
    echo 'Exemplo: ', $numero;
 
    $divisores = 0;
    echo '<br>';
    for($count=2; $count<$numero; $count++)
    if($numero % $count == 0){
        echo "Multiplo de $count<br />";
        $divisores++;
    }
    echo '<br>';
    if($divisores)  echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
    else    echo "É primo!";


?>