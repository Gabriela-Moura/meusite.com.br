<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Absoluto</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Valor Absoluto</h2>
<div class="caixaForm">
    <form method="post">
        <p>Digite um número</p>
            <input class="resposta" type="text" name="numero"><br><br>
        <input class="submit" type="submit" value="calcular">
    </form>
</div>
</body>
</html>
<?php
    $numero = $_POST['numero'] ?? '';
    // $n = -5;
    echo '<br>Valor absoluto: '.abs($numero); // abs calcula o valor absoluto do número (ex:. valor absoluto de -5 é 5)
    echo "<br><a href='min_max.php'>➡️Ir para Maior e Menor</a>";
?>