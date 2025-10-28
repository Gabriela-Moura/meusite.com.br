<?php
$ganhadores = 'ganhadores.json';

$nome = $_POST['nome'] ?? '';
$numero = $_POST['numero'] ?? '';
$premio = $_POST['premio'] ?? '';
$data = $_POST['data'] ?? '';
$hora = $_POST['hora'] ?? '';

if(file_exists($ganhadores)) {
    $json = file_get_contents($ganhadores);
    $n_sorteados = json_decode($json, true);
}
if(!empty($nome) && !empty($premio)) {
    $n_sorteados[] = [
        'numero' => $numero,
        'premio' => $premio,
        'data'=> date("d/m/Y"),
        'hora' => date("H:i:s"),
        'nome' => $nome
    ];
}
file_put_contents($ganhadores, json_encode($n_sorteados, JSON_PRETTY_PRINT| JSON_UNESCAPED_UNICODE ));
 
echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>🥳Lista dos Ganhadores</h2>";

if(!empty($n_sorteados)) {
    echo "<table cellpadding='20'>";
    echo "<tr><th>Número</th><th>Nome</th><th>Prêmio</th><th>Data</th><th>Hora</th></tr>";
    foreach($n_sorteados as $ns) {
        echo "<tr>
                <td>{$ns['numero']}</td>
                <td>{$ns['nome']}</td>
                <td>{$ns['premio']}</td>
                <td>{$ns['data']}</td>
                <td>{$ns['hora']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhum ganhador registrado ainda.</p>";
}

echo "<br><a href='sorteio.php'>🔄 Novo sorteio</a>";
?>