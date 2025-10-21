<?php
    echo"<link rel='stylesheet' href='style.css'>";
    date_default_timezone_set("America/Sao_Paulo");
    echo "Data atual: " . date("d/m/Y") . "<br>";
    echo "Hora atual: " . date("H:i:s") . "<br>";
    echo "Daqui a 7 dias: " . date("d/m/Y", strtotime("+7 days"));
    echo "<br><a href='date_natal.php' class='salvar'>Veja quantos dias falta para o Natal!!</a>";
?>