<?php
// Solicita o número ao usuário
echo "Digite um número: ";
$numero = trim(fgets(STDIN));

// Verifica se é par ou ímpar
if ($numero % 2 == 0) {
    echo "O número $numero é PAR.\n";
} else {
    echo "O número $numero é ÍMPAR.\n";
}
?>