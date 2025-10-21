<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca Texto</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de String - substr</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite uma frase ou palavra:</p>
                <input class="resposta" type="text" name="txt"><br><br>
            <input class="submit" type="submit" value="Enviar">
        </form>
    <div>
</body>
</html>
<?php
    $txt = $_POST['txt'] ?? '';
    $novo_txt = str_replace(['a', 'e', 'o', 'u'], 'i', $txt);
    echo "<br>$novo_txt";
    echo "<br><br><a href='tipo_variavel.php'>➡️Ir para Funções de Sistemas e Utilitários - gettype</a>";
?>
<?php
    // $txt = "banana";
    // $novo_txt = str_replace('a', 'e', $txt);//substitui o "a" por "e"
    // echo $novo_txt; //saída: banene