<?php
$ganhadores = 'ganhadores.json';
$nome = $_POST['nome'] ?? '';
$numero = $_POST['numero'] ?? 0;
$premio = $_POST['premio'] ?? '';

$n_sorteados = [];

// Carregar ganhadores anteriores
if(file_exists($ganhadores)) {
    $json = file_get_contents($ganhadores);
    $n_sorteados = json_decode($json, true);
}

// Adicionar novo ganhador
if(!empty($nome) && !empty($premio)) {
    $n_sorteados[] = [
        'numero' => $numero,
        'nome' => $nome,
        'premio' => $premio,
        'data' => date("d/m/Y"),
        'hora' => date("H:i:s")
    ];
    file_put_contents($ganhadores, json_encode($n_sorteados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// Exibir lista
echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>🏆 Lista de Ganhadores</h2>";

if(!empty($n_sorteados)) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Número</th><th>Nome</th><th>Prêmio</th><th>Data</th><th>Hora</th></tr>";
    foreach($n_sorteados as $g) {
        echo "<tr>
                <td>{$g['numero']}</td>
                <td>{$g['nome']}</td>
                <td>{$g['premio']}</td>
                <td>{$g['data']}</td>
                <td>{$g['hora']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhum ganhador registrado ainda.</p>";
}

echo "<br><a href='sorteio.php'>🔄 Novo sorteio</a>";
?>