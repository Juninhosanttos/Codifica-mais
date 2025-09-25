<?php
// Solicita os três números ao usuário
echo "Digite o primeiro número: ";
$numero1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número: ";
$numero2 = (float) trim(fgets(STDIN));

echo "Digite o terceiro número: ";
$numero3 = (float) trim(fgets(STDIN));

// Determina o maior número
$maior = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}

if ($numero3 > $maior) {
    $maior = $numero3;
}

// Exibe o resultado
echo "O maior número é: $maior\n";
?>