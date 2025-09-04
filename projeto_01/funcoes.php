<?php
function conecta($usuario, $senha) {
    if ($usuario === "admin" && $senha === "@#senha") {
        header("Location: painel.php");
        exit;
    } else {
        // Codifica a mensagem para evitar problemas com acentuação
        $msg = urlencode("Usuário ou senha inválidos!");
        header("Location: index.php?msg=$msg");
        exit;
    }
}



function nota($nota,$nome){
    echo "<h2 style='font-family: Arial, Helvetica, sans-serif;'>Boletim Escolar🎒📝</h2>";
    if ($nota >= 7) {
        echo "<p style='font-size: large; font-family: Arial, Helvetica, sans-serif;'>$nome, você foi <strong style='color: green;'> aprovado(a)</strong>. Parabéns!!🥳</p>";
    }

    if($nota >= 5 && $nota <7){
        echo"<p style='font-size: large; font-family: Arial, Helvetica, sans-serif;'>$nome, você está de <strong style='color: orange;'>recuperação!!! </strong> Estude mais😐</p>";
    }
    
    if($nota < 5){
        echo"<p style='font-size: large; font-family: Arial, Helvetica, sans-serif;'>Que pena $nome! Você foi <strong style='color: red;'> reprovado(a)😞</strong</p>";
    }
}
?>