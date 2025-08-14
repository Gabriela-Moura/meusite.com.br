<?php
    $feriado = false;
    $fimDeSemana = true;
    if ($feriado || $fimDeSemana){
        echo "Pode descansar.";
    }else{
        echo "Dia útil de trabalho.";
    }
?>