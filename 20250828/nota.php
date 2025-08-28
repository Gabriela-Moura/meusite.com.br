<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>
    <h2 style='color: red'>Boletim escolar🎒📝</h2>
    <form action="calcula_nota.php" method="post">
        <label for="nome">🔴Nome:</label>
        <input type="text" name="nome" id="nome" step="any" required><br><br>
        <label for="nota">🔴Sua nota:</label>
        <input type="number" name="nota" id="nota" step="any" required><br><br>
        <button type="submit">Ver Boletim</button>
    </form>    
</body>
</html>