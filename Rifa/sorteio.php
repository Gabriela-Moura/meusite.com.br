<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio automático</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <div class="inicio">
        <h2>Sorteio Automático</h2>
        <div class="caixaForm">
            <form action="resultado_sorteio.php" method="post">
                <p><label>Qual prêmio será sorteado:<label></p>
                    <input class="resposta" type="text" name="premio" required><br>
                <p><label>Intervalo de rifas sorteadas<label></p>
                <div class="linha">
                    <select name="numinimo" required>
                        <option value="1">1</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                        <option value="700">700</option>
                        <option value="800">800</option>
                        <option value="900">900</option>
                        <option value="1000">1000</option>
                    </select>
                    -
                    <select name="numaximo" required>
                        <option value="1">1</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                        <option value="700">700</option>
                        <option value="800">800</option>
                        <option value="900">900</option>
                        <option value="1000">1000</option>
                    </select>
                </div>
                <br><br>
                <input class="submit" type="submit" value="Sortear">
            </form>
        <div>
    </div>
</body>
</html>
