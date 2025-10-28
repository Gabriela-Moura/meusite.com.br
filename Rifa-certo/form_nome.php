<?php
$numero = $_GET['numero'] ?? 0;
$premio = $_GET['premio'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Ganhador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cadastro do Ganhador</h2>
    <form action="lista.php" method="post">
        <p><label>Nome do ganhador:</label></p>
        <input type="text" name="nome" required><br><br>
        <!-- Passando o número e prêmio via POST -->
        <input type="hidden" name="numero" value="<?php echo $numero; ?>">
        <input type="hidden" name="premio" value="<?php echo $premio; ?>">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
