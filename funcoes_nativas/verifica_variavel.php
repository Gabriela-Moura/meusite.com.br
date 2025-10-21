<?php
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<h2>Funções de Sistemas e Utilitários - isset</h2>";
    $nome = "Maria";

    if(isset($nome)) {
        echo "A variável existe!";
    }else {
        echo "A variável não existe";
    }
    echo "<br><br><a href='variavel_vazia.php'>➡️Ir para Funções de Sistemas e Utilitários - empty</a>";
?>