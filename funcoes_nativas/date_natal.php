<?php
echo"<link rel='stylesheet' href='style.css'>";
$hoje = new Datetime('');
$natal = new DateTime('2025-12-25');
$intervalo = $hoje->diff($natal);
echo "Faltam ".$intervalo->days." dias para o Natal";
echo "🎅🏽🎄";
echo "<br><a href='dados_navegacao.php'>➡️Veja os dados de navegação</a>";
?>