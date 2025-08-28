<?php
    function media($n1, $n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $resultado = media($n1, $n2, $n3);

    echo "<h2 style= 'color: red'> Média calculada: </h2>";
    echo "Os números digitados foi foram: $n1, $n2 e $n3 <br>";
    echo "➡️<strong> O resultado da média é: </strong>".number_format($resultado,2);
    //echo "O resultado é: ".media(7, 8, 9);
?>