<?php
$votos = [1 => 0, 2 => 0, 3 => 0]; // contadores de votos

echo "Digite seu voto (1, 2 ou 3). Digite 0 para encerrar.\n";

while (true) {
    $voto = (int) readline("Voto: ");

    if ($voto === 0) {
        break; // encerra votação
    } elseif ($voto >= 1 && $voto <= 3) {
        $votos[$voto]++;
    } else {
        echo "Voto inválido! Tente novamente.\n";
    }
}

// total de votos
$total = array_sum($votos);

if ($total === 0) {
    echo "Nenhum voto registrado.\n";
    exit;
}

// exibir resultados
echo "\nResultado da votação:\n";
foreach ($votos as $candidato => $qtde) {
    $porcentagem = ($qtde / $total) * 100;
    echo "Candidato $candidato: $qtde votos (" . number_format($porcentagem, 2) . "%)\n";
}

// determinar vencedor
$maxVotos = max($votos);
$vencedores = array_keys($votos, $maxVotos);

if (count($vencedores) === 1) {
    echo "\nO vencedor foi o Candidato " . $vencedores[0] . "!\n";
} else {
    echo "\nHouve empate entre os candidatos: " . implode(", ", $vencedores) . ".\n";
}
?>