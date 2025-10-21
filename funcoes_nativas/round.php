<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Round</h2>
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
    // $n = 1723.79;
    echo "<br>Arredondamento: ".round($numero); // round arredonda o número
    echo "<br><br><a href='rand.php'>➡️Ir para o Rand</a>"
?> 