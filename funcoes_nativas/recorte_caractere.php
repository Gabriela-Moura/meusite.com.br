<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorte Caractere</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de String - substr</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite seu nome:</p>
                <input class="resposta" type="text" name="txt"><br><br>
            <input class="submit" type="submit" value="Enviar">
        </form>
    <div>
</body>
</html>
<?php
    $txt = $_POST['txt'] ?? '';
    echo "<br>O seu nome é: $txt <br>";
    echo "<br><br>O seu apelido é: ".substr($txt, 0, 3);
    echo "<br><br><a href='troca_texto.php'>➡️Ir para Funções de String - str_replace</a>";
?>
<?php
// $txt = "Gabriela";
// echo "O seu nome é: $txt <br>";
// echo "O seu apelido é: ".substr($txt, 0, 3);
?>