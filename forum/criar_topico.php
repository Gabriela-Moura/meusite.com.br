<?php
echo"<link rel='stylesheet' href='style.css'>"; //linka o arquivo de estilo
session_start();
if(!isset($_SESSION['usuario'])) { //verifica se o usuário está logado
    echo "Você precisa estar logado para criar um tópico.";
    exit;
}
if($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $topicos = simplexml_load_file('topicos.xml'); //lê o aruqivo e joga dentro de topicos
    $novo = $topicos->addChild('topico'); //cria um novo tópico
    $novo->addChild("autor", $_SESSION['usuario']); //adiciona um autor ao tópico
    $novo->addChild("titulo", $_POST['titulo']);//adiciona um título ao tópico
    $novo->addChild("mensagem", $_POST['mensagem']);//adiciona uma mensagem ao tópico
    $novo->addChild("comentarios"); // adiciona um novo comentario ao tópico
    $topicos->asXML('topicos.xml');//salva os tópicos no arquivo topicos.xml
    echo "Tópico criado com sucesso! <a href='listar.php'>Ver tópicos</a>";//Dá uma mensagem ao usuário e um link para voltar para a página de ver tópicos
} else {
?>
<form method="post">
    Título: <input type="text" name="titulo" required><br> <!--Título do tópico - Campo obrigatório-->
    Mensagem: <textarea name="mensagem" required></textarea><br> <!--Mensagem do tópico - Campo obrigatório-->
    <button type=submit>Criar tópico</button>
</form>
<?php } ?>