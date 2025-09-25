<?php
// Número a ser adivinhado (pode ser alterado)
$numeroSecreto = 7;

do {
    // Solicita ao usuário um número
    $input = readline("Adivinhe o número entre 1 e 10: ");
    
    // Converte a entrada em inteiro
    $palpite = intval($input);

    // Verifica o palpite
    if ($palpite < $numeroSecreto) {
        echo "Muito baixo! Tente novamente.\n";
    } elseif ($palpite > $numeroSecreto) {
        echo "Muito alto! Tente novamente.\n";
    } else {
        echo "Parabéns! Você acertou o número $numeroSecreto.\n";
        break; // Sai do loop
    }
} while (true);
?>