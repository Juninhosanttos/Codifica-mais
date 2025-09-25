<?php
$valor = (int) readline("Digite o valor para saque: ");

$cedulas = [100, 50, 20, 10, 5, 2];
$resultado = [];

foreach ($cedulas as $cedula) {
    $qtd = intdiv($valor, $cedula); // quantidade de notas dessa cédula
    $valor = $valor % $cedula;      // resto do valor
    $resultado[$cedula] = $qtd;
}

echo "Quantidade mínima de cédulas:\n";
foreach ($resultado as $cedula => $qtd) {
    echo "$qtd × R$ $cedula\n";
}
?>