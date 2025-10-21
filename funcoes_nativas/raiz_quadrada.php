<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Raiz Quadrada</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite um número</p>
                <input class="resposta" type="text" name="numero"><br><br>
            <input class="submit" type="submit" value="calcular">
        </form>
    <div>
</body>
</html>
<?php
    $numero = $_POST['numero'] ?? '';
    // $n=5;
    echo"<br>Raiz: ".sqrt($numero); // o sqrt calcula a raiz quadrado do número enviado pelo método POST
    echo "<br><a href='valor_absoluto.php'>➡️Ir para Valor Absoluto</a>";
?>