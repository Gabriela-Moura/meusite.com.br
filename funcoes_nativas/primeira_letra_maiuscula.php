<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Letra Maiuscula</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de String - ucfirst</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite seu nome</p>
                <input class="resposta" type="text" name="txt" placeholder="escreva tudo em minúsculo"><br><br>
            <input class="submit" type="submit" value="Enviar">
        </form>
    <div>
</body>
</html>
<?php
    $txt = $_POST['txt'] ?? '';
    echo "<br>O seu nome: $txt deve ser escrito assim: ".ucfirst($txt);
    echo "<br><br><a href='recorte_caractere.php'>➡️Ir para Funções de String - substr</a>";
?>
<?php
// $txt = "ricardo";
// echo "O se nome: $txt deve ser escrito assim: ".ucfirst($txt);
?>