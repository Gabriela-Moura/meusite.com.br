<?php
$vetor = [4, 8, 15, 16, 23, 42, 87, 34, 9, 31];
$busca = 15;
$achou = false;
foreach ($vetor as $i => $valor) {
    if ($valor == $busca) {
        echo "<h2> Buscando o número $busca... </h2>";
        echo "Número $busca encontrado na posição $i";
        $achou = true;
        break;
    }
}
if (!$achou) {
    echo "<h2> Buscando o número $busca... </h2>";
    echo"Número não encontrado";
}