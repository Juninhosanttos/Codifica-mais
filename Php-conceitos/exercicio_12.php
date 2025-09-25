<?php
$soma = 0;

// Loop de 2 até 100, incrementando de 2 (somente números pares)
for ($i = 2; $i <= 100; $i += 2) {
    $soma += $i;
}

echo "A soma dos números pares de 1 a 100 é: $soma";
?>