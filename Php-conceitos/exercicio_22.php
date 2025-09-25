<?php
$base = (int) readline("Digite a base: ");
$expoente = (int) readline("Digite o expoente: ");

$resultado = 1;

for ($i = 1; $i <= $expoente; $i++) {
    $resultado *= $base;
}

echo "$base ^ $expoente = $resultado\n";
?>
