<?php
$str = "computador";
// a função nativa = preg_match_all()
// realisa buscas com parâmetro
$vogais = preg_match_all('/[aeiou]/i', $str);
echo "A palavra é $str <br><br>";
echo "Contando as vogais de $str... <br><br>";
echo "Total de vogais: $vogais";
?>