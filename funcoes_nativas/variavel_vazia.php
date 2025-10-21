<?php
echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>Funções de Sistemas e Utilitários - empty</h2>";
$valor=0;
if (empty($valor)) {
    echo "A variável está vazia";
}else {
    echo "A variável não está vazia";
}
echo "<br><br><a href='destroi_variavel.php'>➡️Ir para Funções de Sistemas e Utilitários - unset</a>";
?>
