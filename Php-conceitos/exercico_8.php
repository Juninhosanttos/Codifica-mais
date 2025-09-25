<?php
// Solicita as 3 notas
echo "Digite a primeira nota: ";
$nota1 = (float) trim(fgets(STDIN));

echo "Digite a segunda nota: ";
$nota2 = (float) trim(fgets(STDIN));

echo "Digite a terceira nota: ";
$nota3 = (float) trim(fgets(STDIN));

// Calcula a média
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibe resultado
echo "Média: " . number_format($media, 2, ',', '.') . PHP_EOL;

if ($media >= 6) {
    echo "Aprovado!" . PHP_EOL;
} else {
    echo "Reprovado!" . PHP_EOL;
}
?>