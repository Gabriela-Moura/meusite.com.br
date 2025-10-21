<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrômo</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções Nativas - strrev</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite uma palavra:</p>
                <input class="resposta" type="text" name="txt"><br><br>
            <input class="submit" type="submit" value="Enviar">
        </form>
    <div>
</body>
</html>
<?php
    $txt = $_POST['txt'] ?? '';
    echo "<br>Seu nome invertido é: ".strrev($txt);
    $txt_invertido = strrev($txt);
    echo "<br>";
    if($txt == $txt_invertido){
        echo ("$txt é uma palavra palindrômo!");
    } else {
        echo ("$txt não é uma palavra palindrômo");
    }
    echo "<br><br><a href='raiz_quadrada.php'>➡️Voltar para Raiz Quadrada</a>";
?>
<?php
    // $texto = "carlos";
    // echo "Seu nome invertido é: ".strrev($texto);