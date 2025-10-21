<?php
echo"<link rel='stylesheet' href='style.css'>";
//Exibe informações do ususário e o servidor

echo "<h2>Informações do Acesso</h2>";

$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$servidor = gethostname();
$versaoPHP = phpversion();

echo "👩🏽‍💻IP do usuário: " . $ip . "<br>";
echo "🌐Navegador: " . $navegador. "<br>";
echo "💻Servidor: " . $servidor . "<br>";
echo "⚙️Versão do PHP" . $versaoPHP . "<br><br>";
echo "<a href='conta_caractere.php'>➡️Ir para Funções de String - strlen</a>"
?>