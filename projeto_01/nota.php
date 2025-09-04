<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>
    <h1 style='font-family: Arial, Helvetica, sans-serif;'>Boletim escolar🎒📝</h1>
    <form action="calcula_nota.php" method="post"; style=" border: 2px solid black; padding: 10px; width: 200px; height: 160px; font-size: large; text-align:center; background-color: rgb(197, 190, 190);">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" step="any" required><br><br>
        <label for="nota">Sua nota:</label>
        <input type="number" name="nota" id="nota" step="any" required><br><br>
        <button type="submit">Ver Boletim</button>
    </form>    
</body>
</html>