<?php
$ganhadores = 'ganhadores.json';
$premio = $_POST['premio'] ?? '';
$numinimo = isset($_POST['numinimo']) ? (int)$_POST['numinimo'] : 1;
$numaximo = isset($_POST['numaximo']) ? (int)$_POST['numaximo'] : 1000;

$n_sorteados = [];

// Carregar ganhadores anteriores
if(file_exists($ganhadores)) {
    $json = file_get_contents($ganhadores);
    $n_sorteados = json_decode($json, true);
}

// Gerar número sorteado único
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

echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>🎉 Resultado do Sorteio</h2>";
echo "<p>🥳 Número sorteado:</p>";
echo "<p class='ganhador'>$numero</p>";
echo "<p>Prêmio: <div class='resultado'>$premio</div></p>";
echo "<p>Data: " . date("d/m/Y") . "</p>";
echo "<p>Hora: " . date("H:i:s") . "</p>";
echo "<br><a href='form_nome.php?numero=$numero&premio=" . urlencode($premio) . "'>➡️ Cadastrar nome do ganhador</a>";
?>