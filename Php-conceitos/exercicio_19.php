<?php
$limite = (int) readline("Digite o limite (L): ");
$divisor = (int) readline("Digite o divisor (D): ");

$quantidade = 0;

for ($i = 1; $i <= $limite; $i++) {
    if ($i % $divisor == 0) {
        $quantidade++;
    }
}

echo "Entre 1 e $limite existem $quantidade números divisíveis por $divisor.\n";
?>