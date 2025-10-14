<?php
echo "<h2>Maior de 3</h2>";

$a = 5;
$b = 8;
$c = 3;

echo "Números: $a, $b, $c <br>";
if ($a > $b && $a > $c) {
$maior = $a;
} elseif ($b > $a && $b > $c) {
$maior = $b;
} else {
$maior = $c;
}
echo "Maior = " . $maior;
?>