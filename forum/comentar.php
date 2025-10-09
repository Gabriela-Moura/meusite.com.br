<?php
echo"<link rel='stylesheet' href='style_teste.css'>"; //linka o arquivo de estilo
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo"<link rel='stylesheet' href='estilo.css'>"; //linka o arquivo de estilo
    $topicos = simplexml_load_file('topicos.xml'); //lê o aruqivo e joga dentro de topicos
    $id = intval($_POST['id']); //pega o id do tópico
    $comentario = $topicos->topico[$id]->comentarios->addChild("comentario"); //adiciona um novo comentário ao id do tópico
    $comentario->addChild("nome", $_POST['nome']); //adiciona o nome do usuário que comentou
    $comentario->addChild("mensagem", $_POST['mensagem']);//adiciona a mensagem do usuário que comentou 
    $topicos->asXML("topicos.xml");//salva os tópicos no arquivo topicos.xml
    header("Location: listar.php"); //envia o usuário para a página listar.php
}
?>