<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar pessoas🧑</title>
</head>
<body style="background-color: beige">
    <h1 style="color: brown">Listar pessoas🧑</h1>
    <form action="listar_pessoas.php" method="post">
        <label>Nome da pessoa a ser atendida:</label>
        <p><input type="text" name="cliente" required></p>
        <input type="submit" value="Enviar">
    </form>
    <h3 style="color: brown; background-color;">Lista de atendimento</h3>
    <?php
        //Inserindo o cliente no arquivo atendimento.txt
        $nome_atendimento = $_POST['cliente'] ??'';
        $arquivo = fopen("atendimento.txt", "a");
        fwrite($arquivo, "$nome_atendimento\n");
        fclose($arquivo);
        
        //Listar os nomes cadastrados no arquivo.txt
        
        $arquivo = fopen("atendimento.txt", "r");
        while(!feof($arquivo)) {
            echo fgets($arquivo) . "<br>";
        }
        fclose($arquivo);
    ?>
</body>
</html>