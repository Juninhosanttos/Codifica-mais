<?php
// Solicita o ano de nascimento
echo "Digite seu ano de nascimento: ";
$anoNascimento = trim(fgets(STDIN));

// Pega o ano atual
$anoAtual = date("Y");

// Calcula a idade
$idade = $anoAtual - $anoNascimento;

echo "Você tem $idade anos.\n";
?>