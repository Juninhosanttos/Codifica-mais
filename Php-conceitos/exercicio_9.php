<?php
// Solicita os números ao usuário
echo "Digite o primeiro número: ";
$num1 = (int)trim(fgets(STDIN));

echo "Digite o segundo número: ";
$num2 = (int)trim(fgets(STDIN));

// Verifica qual é o maior
if ($num1 > $num2) {
    echo "O maior número é: $num1\n";
} elseif ($num2 > $num1) {
    echo "O maior número é: $num2\n";
} else {
    echo "Os dois números são iguais.\n";
}
?>