<?php
//funcoes.php
function saudacao($nome){
    return "Bem-vindo(a), $nome! Sua participação foi confirmada!";
}

function banco_dados($db){
    return "Seu banco, $db, foi conectado com sucesso";
}

function fiap($aluno1,$aluno2,$aluno3,$observacao){
    echo"<h3 style='color: brown'>📋Lista de alunos com observações: </h3>";
    echo"<ul>";
    echo"<li> $aluno1 </li>";
    echo"<li> $aluno2 </li>";
    echo"<li> $aluno3 </li>";
    echo"</ul>";
    echo"<p><strong> Observação:</strong> $observacao </p>";
}

function nota($nota,$nome){
    echo "<h2 style='color: red'>Boletim Escolar🎒📝</h2>";
    if ($nota >= 7) {
        echo "$nome, você foi <strong> aprovado(a)</strong>. Parabéns!!🥳";
    }

    if($nota >= 5 && $nota <7){
        echo"$nome, você está de <strong>recuperação!!! </strong> Estude mais😐";
    }
    
    if($nota < 5){
        echo"Que pena $nome! Você foi <strong> reprovado(a)😞</strong";
    }
}
?>