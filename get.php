<?php 
    //Get recebe as variáveis por URL
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $sinal = $_GET['sinal'];
    
    $resultado = $valor1.$sinal.$valor2." = ";
    echo $resultado;

    //get.php?nome=Gabriela&valor1=15&valor2=33&sinal=*
    //O sinal de + tem papel de preencher espaços na URL para testarmos teremos que colocar em hexadecillam : sinal=%2B
    
    if ($sinal == "+"){
        $soma = $valor1 + $valor2;  
        echo $soma;      
        echo "<p> O resultado da soma acima é: $soma </p>";
    }
    
    if ($sinal == "-"){
        $subtracao = $valor1 - $valor2;   
        echo "$subtracao";      
        echo "<p> O resultado da sutração acima é: $subtracao </p>";
    }

        if ($sinal == "*"){
        $multiplicacao = $valor1*$valor2; 
        echo "$multiplicacao";        
        echo "<p> O resultado da multiplicação acima é: $multiplicacao </p>";
    }

        if ($sinal == "/"){
        $divisao = $valor1/$valor2;  
        echo "$divisao";       
        echo "<p> O resultado da divisão acima é: $divisao </p>";
    }

?>