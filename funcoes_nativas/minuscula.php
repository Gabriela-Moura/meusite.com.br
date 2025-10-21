<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minusculo</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de String - strtolower</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite uma frase ou palavra</p>
                <input class="resposta" type="text" name="txt"><br><br>
            <input class="submit" type="submit" value="Enviar">
        </form>
    <div>
</body>
</html>
<?php
    $txt = $_POST['txt'] ?? '';
    echo "<br>A frase: $txt ficou assim: ". strtolower($txt) . " em Minúscula";
    echo "<br><br><a href='primeira_letra_maiuscula.php'>➡️Ir para Funções de String - ucfirst</a>";
?>
<?php
// $txt = "Bem Vindos!";
// echo "A frase: $txt ficou assim: ". strtolower($txt) . "em Minúscula";
?>