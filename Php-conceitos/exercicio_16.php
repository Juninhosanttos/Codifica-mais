<?php
$numero = (int) readline("Digite o número da tabuada: ");
$limite = (int) readline("Digite o limite da tabuada: ");

echo "Tabuada do $numero até $limite:\n";

for ($i = 1; $i <= $limite; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
}
?>