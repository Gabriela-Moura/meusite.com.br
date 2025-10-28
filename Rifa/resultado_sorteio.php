<?php

echo"<link rel='stylesheet' href='style.css'>";

$premio = $_POST['premio'] ?? '';
$numaximo = (int)$_POST['numaximo'] ?? '';
$numinimo = (int)$_POST['numinimo'] ?? '';
$n_sorteados = [];
$data = date("d/m/Y");
$hora = date("H:i:s");

do {
    $numero = rand($numinimo, $numaximo);
    $ja_sorteado = false;

    foreach ($n_sorteados as $sorteio) {
        if ($sorteio['numero'] == $numero) {
            $ja_sorteado = true;
            break;
        }
    }
} while ($ja_sorteado);

    echo "<p>🥳Parabéns número</p>";
    echo "<p class='ganhador'>$numero</p>";
    echo "<p>Prêmio: <div class='resultado'>$premio</div></p>";
    echo "<p>Data: " . $data . "</p>";
    echo "<p>Hora: " . $hora . "</p>";
    // echo "<br><a href='form_nome.php?numero=$numero&premio=" . urlencode($premio) . "'>➡️ Cadastrar nome do ganhador</a>";
    echo "<h2>Nome do ganhador</h2>";
    echo "<div class='caixaForm'>";
        echo "<form action='lista.php' method='post'>";
            echo "<input class='resposta' type='text' name='nome'><br>";
            echo "<input type='hidden' name='numero' value='$numero'>";
            echo "<input type='hidden' name='premio' value='$premio'>";
            echo "<input type='hidden' name='data' value='$data'>";
            echo "<input type='hidden' name='hora' value='$hora'>";
            echo "<input class='submit' type='submit' value='Cadastrar'>";
        echo "</form>";
    echo "</div>";
?>