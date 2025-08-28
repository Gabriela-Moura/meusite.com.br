<?php
    $numero1 = 10;
    $numero2 = 3;
    $divisao = $numero1/$numero2;
    $resto = $numero1 % $numero2;
    echo "O resultado da divisão ". $numero1. " ÷ ". $numero2. " = ". number_format($divisao, 2). "<br>";// O resultado da divisão entre 10 e 3 é: 3
    echo "O resto dessa divisão é: ".$resto; //O resto dessa divisão é: 1
    //echo $resto; // Saída: 1 (pois 10 dividido por 3 tem resto 1)
?>