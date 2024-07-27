<?php 
    echo '9. Crie um programa que calcule e imprima os números Fibonacci até o décimo termo: <br>';

    function fibonacci($n) {
        $fib = array();
        $fib[0] = 0;
        $fib[1] = 1;

        for ($i = 2; $i <= $n; $i++) {
            $fib[$i] = $fib[$i-1] + $fib[$i-2];
        }

        return $fib;
    }

$fibonacciSequence = fibonacci(10);

echo "Os primeiros 10 termos da sequência de Fibonacci são: ";
foreach ($fibonacciSequence as $term) {
    echo "$term ";
}

?>