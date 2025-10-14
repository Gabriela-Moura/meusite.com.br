<?php
    $valor = $_POST['valor'];
    echo "<h2>Tabuada inversa</h2>";
    for ($i = 10; $i >= 1; $i--) {
        $resultado = ($valor*$i);
        echo"$valor x $i = $resultado <br>";
    }
?>