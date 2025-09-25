<?php
$numero = (int) readline("Digite um número inteiro: ");

if ($numero <= 1) {
    echo "$numero não é primo.\n";
} else {
    $primo = true;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo "$numero é primo.\n";
    } else {
        echo "$numero não é primo.\n";
    }
}
?>