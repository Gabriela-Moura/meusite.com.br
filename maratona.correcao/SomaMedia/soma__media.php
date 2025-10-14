<?php
$numeros = [7, 2, 10, 4, 6];
//inicializa as variáveis
$soma = 0;
$maior = $numeros[0];
$menor = $numeros[0];
$quantidade = 0;
//Percorre cada número
foreach ($numeros as $n) {
    $soma +=$n;
    $quantidade++;
    //Verifica se é maior
    if ($n > $maior) {
        $maior = $n;
    }
    //Verifica se é menor
    if ($n < $menor) {
        $menor = $n;
    }
}
//Calcula média
$media=$soma/$quantidade;
//Exibe resultados
echo "Soma = $soma, Média = $media, Maior = $maior, Menor = $menor";
?>