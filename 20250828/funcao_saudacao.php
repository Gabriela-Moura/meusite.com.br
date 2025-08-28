<?php
    //essa é uma função
    //início da função saudação
    function saudacao($nome){
        return "Olá, $nome!";
    }
    //fim da função saudação
    //definição da função
    function nomedafunção($parametro1, $parametro2){
        //código que será executado
        $resultado = $parametro1 + $parametro2;
        return $resultado;//retorna o valor 
    }
//chamando a função
$frase = saudacao("Gabi");
$soma =  nomedafunção(5,10);
echo "$frase O resultado é: ". $soma;
?>