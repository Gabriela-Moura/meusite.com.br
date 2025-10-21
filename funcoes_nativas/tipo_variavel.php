<?php
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<h2>Funções de Sistema e Utilitários - gettype</h2>";
    $numero = 10;
    echo "$numero é: ".gettype($numero); //saída integer
    echo "<br>";
    $texto = "Olá";
    echo "$texto é: ".gettype($texto); //saída: string
    echo "<br><br><a href='verifica_variavel.php'>➡️Ir para Funções de Sistemas e Utilitários - isset</a>"
?>
<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Variável</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Funções de Sistema e Utilitários</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite um número:</p>
                <input class="resposta" type="number" name="numero"><br><br>
            <p>Digite uma palavra:</p>
                <input class="resposta" type="text" name="txt"><br><br>
            <input class="submit" type="submit" value="Enviar">
        </form>
    <div>
</body>
</html>
<?php
    // $numero = $_POST['numero'] ?? '';
    // $txt = $_POST['txt'] ?? '';
    // echo "<br>$numero é: ".gettype($numero); //saída: integer
    // echo "<br>";
    // echo "$txt é: ".gettype($txt); //saída: string
    // echo "<br><br><a href='troca_texto.php'>➡️Ir para Funções de Sistemas e Utilitários - gettype</a>";
?>