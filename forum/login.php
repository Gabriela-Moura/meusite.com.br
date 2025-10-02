<?php
echo"<link rel='stylesheet' href='style.css'>"; //linka o arquivo de estilo
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarios = simplexml_load_file('usuarios.xml');
    foreach($usuarios->usuario as $u) {
        if ($u->email ==$_POST['email'] && $u->senha == md5($_POST['senha'])) {
            $_SESSION['usuario'] = (string) $u->email;
            echo "Bem vindo! <br> <a class='topicos' href='criar_topico.php'>Criar tópicos</a>";
            exit;
        }
    }
    echo "Login inválido!";
} else {
?>
<form method="post"> <!--Formulário de login do usuario-->
    Email: <input type="email" name="email" placeholder="maria@email.com" required><br> <!--Email do usuario - Campo obrigatório-->
    Senha: <input type="password" name="senha" required><br><!--Senha do usuario - Campo obrigatório-->
    <button type="submit">Login</button>
</form>
<?php }?>
