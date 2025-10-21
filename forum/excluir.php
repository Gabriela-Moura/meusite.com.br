<?php
echo"<link rel='stylesheet' href='style.css'>"; //linka o arquivo de estilo
session_start();
if(!isset($_SESSION['usuario'])) { //verifica se o usuário está logado
    echo "Você precisa estar logado para excluir um tópico.";
    exit;
}
$topicos = simplexml_load_file('topicos.xml'); //lê o aruqivo e joga dentro de topicos
$id = intval($_GET['id']); //pega o id do tópico
$comentario_id = intval($_GET['comentario']); //pega o id do comentário
if ($_SESSION['usuario'] == $topicos->topico[$id]->autor) { //verifica se o autor do tópico é o usuário
    unset($topicos->topico[$id]->comentarios->comentario[$comentario_id]); //deleta o comentário
    $topicos->asXML('topicos.xml');//salva os tópicos no arquivo topicos.xml
}
header("location: listar.php");//envia o usuário para a página listar.php
?> 