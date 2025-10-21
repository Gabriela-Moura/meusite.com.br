<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Caractere</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de String - strlen</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite uma frase</p>
                <input class="resposta" type="text" name="txt"><br><br>
            <input class="submit" type="submit" value="Contar caracteres">
        </form>
    <div>
</body>
</html>
<?php
    $txt = $_POST['txt'] ?? '';
    echo "<br><br>A frase: $txt tem: " . strlen($txt) . " caracteres<br><br>";
    echo "<a href='maiuscula.php'>➡️Ir para Funções de String - strtoupper</a>";
?>
<?php
// echo"<link rel='stylesheet' href='style.css'>";
// $txt = "Olá Mundo!";
// echo "A frase: $txt tem: " . strlen($txt) . " caracteres<br><br>";
// echo "<a href='maiuscula.php' class='salvar'>➡️Ir para Funções de String - strtoupper</a>";