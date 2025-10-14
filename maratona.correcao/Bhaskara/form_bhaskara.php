<!-- Código Ricardo -->
<?php
$a = 1;
$b = -3;
$c = 2;
$delta = $b*$b-4*$a*$c;
if ($delta < 0) {
    echo "<h2>Bhaskara</h2>";
    echo "Não existem raízes reais";
}elseif ($delta == 0) {
    echo "<h2>Bhaskara</h2>";
    $x = -$b / (2*$a);
    echo "Raiz única: $x";
}else {
    echo "<h2>Bhaskara</h2>";
    $x1 = (-$b + sqrt($delta)) / (2*$a);
    $x2 = (-$b - sqrt($delta)) / (2*$a);
    echo "Raízes $x1 e $x2";
}
// Meu código anterior: 
?>
<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_bhaskara.php" method="post">
    <label>🔴Valor a:</label>
    <p><input type="number" name="valora" required>
    <br>
    <label>🔴Valor b:</label>
    <p><input type="number" name="valorb" required>
    <br>
    <label>🔴Valor c:</label>
    <p><input type="number" name="valorc" required>
    <br>
    <button type='submit'>Bhaskara</button>
</body>
</html>
<?php
    $valora = $_POST['valora'];
    $valorb = $_POST['valorb'];
    $valorc = $_POST['valorc'];
$delta = ($valorb^2)+4*$valora*$valorc;
$raiz1 = (($valorb*-1)-$delta)/2*$valora;
$raiz2 = (($valorb*-1)+$delta)/2*$valora;
echo "As raízes são $raiz1 e $raiz2";
?> -->