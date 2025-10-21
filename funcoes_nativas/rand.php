<?php
echo"<link rel='stylesheet' href='style.css'>";
//Gera um núro aleatório entre 1 e 100
echo "<h2>Gera um número aleatório entre 1 e 100</h2>";
$numero = rand(1, 100);
echo "O número aleatório é: $numero";
echo "<br><a href='data_hora.php' class='salvar'>Ver Data e Hora</a>";