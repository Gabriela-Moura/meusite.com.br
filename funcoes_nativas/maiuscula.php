<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maiusculo</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de String - strtoupper</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite uma frase</p>
                <input class="resposta" type="text" name="txt"><br><br>
            <input class="submit" type="submit" value="Enviar">
        </form>
    <div>
</body>
</html>
<?php
    $txt = $_POST['txt'] ?? '';
    echo "<br>A frase: $txt ficou assim: " . strtoupper($txt) . " em Maiúscula<br><br>";
    echo "<a href='minuscula.php'>➡️Ir para Funções de String - strtolower</a>";
?>
<?php
// echo"<link rel='stylesheet' href='style.css'>";
// echo"<h2>Funções de String - strtoupper</h2>";
// $txt = "Bem Vindos!";
// echo "A frase: $txt ficou assim: " . strtoupper($txt) . " em Maiúscula<br><br>";
// echo "<a href='minuscula.php' class='salvar'>➡️Ir para Funções de String - strtoupper</a>";