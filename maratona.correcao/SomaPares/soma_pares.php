<?php
$soma = 0;
for ($i = 1; $i<=100; $i++) {
    if ($i%2 == 0) {
        $soma+=$i;
    }
}
echo "<h2>Soma dos pares de 1 - 100</h2>";
echo "Soma dos pares = $soma";
?>