<?php
echo "<h2>Palíndromo</h2>";
$palavra = "arara";
if ($palavra == strrev($palavra)) {
echo "$palavra é palíndromo";
} else {
echo "$palavra não é palíndromo";
}
?>