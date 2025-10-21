<?php
echo"<link rel='stylesheet' href='style.css'>";
$premio = $_POST['premio'] ?? '';
$numero = rand(1, 1000);
$banco = 'banco.json';
if ($numero )
echo "<p>🥳Parabéns número</p>";
echo "<p class='ganhador'>$numero</p>";
echo "<p>Prêmio: <div class='resultado'>$premio</div></p>";
echo "<p>Data: " . date("d/m/Y") . "</p>";
echo "<p>Hora: " . date("H:i:s") . "</p>";


echo "<br><br><a href='lista.php'>➡️Ver Lista de Ganhadores</a>";
?>