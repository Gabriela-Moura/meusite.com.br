<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    <form method="post">
        <label>Digite um número:</label>
        <input class="caixa" type="number" name="n">
        <input class="caixa" type="submit" value="Calcular">
    </form>
</body>
</html>
<?php
    if (isset($_POST["n"])) {
    $n = $_POST["n"];
    echo "Potência (n2): " . pow($n,2) . "<br>";
    echo "Raiz quadrada: " . sqrt($n) . "<br>";
    echo "Valor absoluto: " . abs($n) . "<br>";
}
?>