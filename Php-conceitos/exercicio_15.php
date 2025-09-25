<?php
echo "Escolha uma opção:\n";
echo "1 - Calcular área do quadrado\n";
echo "2 - Calcular área do retângulo\n";
echo "3 - Calcular área do triângulo\n";

$opcao = (int) readline("Digite a opção desejada: ");

switch ($opcao) {
    case 1:
        $lado = (float) readline("Digite o lado do quadrado: ");
        $area = $lado * $lado;
        echo "A área do quadrado é: $area\n";
        break;

    case 2:
        $lado1 = (float) readline("Digite o primeiro lado do retângulo: ");
        $lado2 = (float) readline("Digite o segundo lado do retângulo: ");
        $area = $lado1 * $lado2;
        echo "A área do retângulo é: $area\n";
        break;

    case 3:
        $base = (float) readline("Digite a base do triângulo: ");
        $altura = (float) readline("Digite a altura do triângulo: ");
        $area = ($base * $altura) / 2;
        echo "A área do triângulo é: $area\n";
        break;

    default:
        echo "Opção inválida!\n";
}
?>