<?php
    $frutas = ["Maçã", "Banana", "Laranja", "Morango", "Abacaxi", "Uva", "Pera"];
    for ($i = 0; $i < count($frutas); $i++){
        $numero = $i + 1;
        echo "Fruta $numero: $frutas[$i] <br>";
    }
?>