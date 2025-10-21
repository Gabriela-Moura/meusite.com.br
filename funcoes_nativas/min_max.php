<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Maior</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Menor e Maior valor</h2>
    <div class="caixaForm">
        <form method="post">
            <p>Digite o primeiro número</p>
                <input class="resposta" type="text" name="a"><br><br>
            <p>Digite o segundo número</p>
                <input class="resposta" type="text" name="b"><br><br>
            <p>Digite o terceiro número</p>
                <input class="resposta" type="text" name="c"><br><br>
            <p>Digite o quarto número</p>
                <input class="resposta" type="text" name="d"><br><br>
            <p>Digite o quinto número</p>
                <input class="resposta" type="text" name="e"><br><br>
            <input class="submit" type="submit" value="calcular">
        </form>
    </div>
</body>
</html>
<?php
$a = $_POST['a'] ?? '';
$b = $_POST['b'] ?? '';
$c = $_POST['c'] ?? '';
$d = $_POST['d'] ?? '';
$e = $_POST['e'] ?? '';
// $a = 512;
// $b = 1024;
// $c = 2022;
// $d = 128;
// $e = 54;

$maior_valor =  max($a,$b,$c,$d,$e); //retorna o maior valor
$menor_valor =  min($a,$b,$c,$d,$e); //retorna o menor valor

echo "Valores comparados: $a, $b, $c, $d e $e : <br>";
echo "O maior valor é: $maior_valor e o menor valor é $menor_valor<br>";
echo "<a href='round.php' class='salvar'>Ir para Round</a>";