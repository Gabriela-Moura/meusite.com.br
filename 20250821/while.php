<h3> Este é um while </h3>
<?php
    $contador = 1;
    while($contador <= 5){
        echo "Número: $contador<br>";
        $contador++;
    }
    //do while,executa e depois fez a lógica
    $contador = 1;
        do{
            echo "Número: $contador<br>";
            $contador++;
        }while ($contador <=5);
    //Do while executa pra dps fazer a lógica
    // while só executa se a lógica for falsa    
?>