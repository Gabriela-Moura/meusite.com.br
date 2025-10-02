<?php
echo"<link rel='stylesheet' href='style.css'>"; //linka o arquivo de estilo
session_start();
$topicos = simplexml_load_file("topicos.xml"); //lê o aruqivo e joga dentro de topicos
$i = 0; 
foreach ($topicos->topico as $t) {
    echo "<h2>".$t->titulo."</h2>"; //mostra o título do tópico
    echo "<p>".$t->mensagem."</p>"; //mostra a mensagem do tópico
    echo "<small>Autor: ".$t->autor."</small><br>"; //mostra o autor do tópico
    echo "<h3>Comentários:</h3>";
    $i = 0;
    foreach ($t->comentarios->comentario as $c) {
        echo "<p><b>".$c->nome.":</b> ".$c->mensagem; //mostra o nome e a mensagem do comentário
        if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == $t->autor) {
            echo "<a href='excluir.php?id=$i&comentario=$i'>Excluir</a>"; //mostra o link para excluir o comentário se o usuário for o autor do tópico
        }
        echo "</p>";
        $i++;
    } 
    echo "<form method='post' action='comentar.php'>
             <input type='hidden' name='id' value='$i'> 
             Nome: <input type='text' name='nome' required><br> <!--Nome do usuário que vai comentar - Campo obrigatório-->
             Mensagem: <input type='text' name='mensagem' required><br> <!--Mensagem do usuário que vai comentar - Campo obrigatório-->
             <button type='submit'>Comentar</button>
          </form><hr>";
    $i++;
}
?>