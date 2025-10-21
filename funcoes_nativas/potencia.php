<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potência</title>
</head>
<body>
    <h2>Potência</h2>
    <div class="caixaForm">
        <form method="post">
            <link rel='stylesheet' href='style.css'>
            <p>Digite um número</p>
                <input class="resposta" type="text" name="numero"><br><br>
            <p>Digite a potência a ser elevado: </p>
                <input class="resposta" type="text" name="potencia"><br></br>
            <input class="submit" type="submit" value="calcular">
        </form>
    </div>
</body>
</html>
<?php
    $numero = $_POST['numero'] ?? '';
    $potencia = $_POST['potencia'] ?? '';
    //$n = 5;
    //voltar quando aprender sobre enpyt
    echo "Potência: ".pow($numero, $potencia);
    echo "<a href='raiz_quadrada.php' class='salvar'>Ir para Raiz Quadrada</a>"
?> 