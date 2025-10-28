<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio automático</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Sorteio Automático</h2>
    <div class="caixaForm">
        <form action="resultado_sorteio.php" method="post">
            <p><label>Qual prêmio será sorteado:</label></p>
            <input class="resposta" type="text" name="premio" required><br>

            <p><label>Intervalo de rifas sorteadas:</label></p>
            <select name="numinimo" required>
                <option value="">Selecione</option>
                <?php for ($i=1; $i<=1000; $i+=100) echo "<option value='$i'>$i</option>"; ?>
            </select>
            -
            <select name="numaximo" required>
                <option value="">Selecione</option>
                <?php for ($i=1; $i<=1000; $i+=100) echo "<option value='$i'>$i</option>"; ?>
            </select>
            <br><br>
            <input class="submit" type="submit" value="Sortear">
        </form>
    </div>
</body>
</html>