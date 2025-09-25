<?php
$n = (int) readline("Digite um número: ");
$soma = 0;

for ($i = 1; $i <= $n; $i++) {
    $soma += $i;
}

echo "A soma de 1 até $n é: $soma\n";
?>