<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir Variável</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de Sistemas e Utilitários - unset</h2>
    <div class="caixaForm">
        <form action="destroi_variavel.php" method="post">  
            <p>Digite sua idade</p>
                <input class="resposta" type="number" name="idade"><br><br>
                <input class="submit" type="submit" value="Enviar"><br><br>
        </form>
    </div>
    <br>
</body>
</html>
<?php
    $idade = $_POST['idade'];
    unset ($idade); //destrói variavel, exclui ela do sistema
    var_dump(isset($idade));
    echo "<br><br><a href='define_var_global.php'>➡️Ir para Funções de Sistemas e Utilitários - define</a>";
?>