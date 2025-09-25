<?php
// Solicita um número ao usuário
echo "Digite um número: ";
$numero = intval(fgets(STDIN));

// Exibe a tabuada
echo "Tabuada do $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>