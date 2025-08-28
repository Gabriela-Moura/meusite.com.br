<?php
    $pessoas = ["nome" => "João", "Idade" => 30, "altura" => 1.70];
    echo $pessoas["nome"];
    echo "<p> Olá aqui é um HTML </p>"
    //O parágrafo foi o que fez saltar de linha
?>

<!--<p> Olá aqui é um HTML </p>-->

<?php
    $aluno=["nome" => "Francisco", "idade" => 16, "nota" => 100];
    echo "Olá $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota]";
    // No echo as aspas já estão abertas, mas na operação precisa
    $ano_atual = date('Y');
    $nascimento= $ano_atual-$aluno["idade"];
    echo "<p> Você nasceu no ano de $nascimento </p>";
    //Olá Francisco, você tem 16 anos e sua nota é 100
    //Você nasceu no ano de 2009

    $hoje = date('d-m-Y');
    echo "Hoje é $hoje";
    //Hoje é 21-08-2025

    $dia = date('d');
    echo "<p> Hoje, $dia é dia nacional da habitação </p>";
    //Hoje, 21 é dia nacional da habitação

    $hora = date('H:i');
    echo "<p> São exatamente $hora </p>";
    //São exatamente 09:07
?>