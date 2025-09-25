<?php
$n = (int) readline("Digite um número inteiro: ");
$fatorial = 1;

for ($i = $n; $i >= 1; $i--) {
    $fatorial *= $i;
}

echo "$n! = $fatorial\n";
?>