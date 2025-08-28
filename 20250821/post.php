<?php 
    //pot recebe as variáveis por URL
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $sinal = $_POST['sinal'];
    
    $resultado = $valor1.$sinal.$valor2." = ";
    echo $resultado;

    //O sinal de + é transferido normalmente em POST
    
    if ($sinal == "+"){
        $soma = $valor1 + $valor2;  
        echo $soma;      
        //echo "<p> O resultado da soma acima é: $soma </p>";
    }
    
    if ($sinal == "-"){
        $subtracao = $valor1 - $valor2;   
        echo "$subtracao";      
        //echo "<p> O resultado da sutração acima é: $subtracao </p>";
    }

        if ($sinal == "*"){
        $multiplicacao = $valor1*$valor2; 
        echo "$multiplicacao";        
        //echo "<p> O resultado da multiplicação acima é: $multiplicacao </p>";
    }

        if ($sinal == "/"){
        $divisao = $valor1/$valor2;  
        echo "$divisao";       
        //echo "<p> O resultado da divisão acima é: $divisao </p>";
    }

?>