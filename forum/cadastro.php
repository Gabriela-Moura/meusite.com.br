<?php
echo"<link rel='stylesheet' href='style.css'>"; //linka o arquivo de estilo
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarios = simplexml_load_file("usuarios.xml"); //lê o aruqivo e joga dentro de usuarios
    $novo = $usuarios->addChild("usuario"); //cria um novo usuário
    $novo->addChild("nome", $_REQUEST['nome']); //adiciona o nome do usuário
    $novo->addChild("celular", $_POST['celular']);//adiciona um número de celular
    $novo->addChild("email", $_POST['email']);//adiciona um email
    $novo->addChild("senha", md5($_POST['senha']));//adiciona uma senha com criptografia
    $usuarios->asXML("usuarios.xml");//salva os usuários no arquivo usuarios.xml
    echo "<p>Usuário cadastrado com sucesso! <br> <a class='link' href='login.php'>Fazer login</a></p>"; //Dá uma mensagem ao usuário e um link para voltar para a página de login
} else {
?>
<form method="post"> <!--Formulário de cadastro do usuario-->
    Nome: <input class="caixaForm" type="text" name="nome" placeholder="Digite seu nome" required><br> <!--Nome do usuario - Campo obrigatório-->
    Celular: <input class="caixaForm" type="text" name="celular" placeholder="(99) 99999-9999" required><br><!--Celular do usuario - Campo obrigatório-->
    Email: <input class="caixaForm" type="email" name="email" placeholder="maria@email.com" required><br> <!--Email do usuario - Campo obrigatório-->
    Senha: <input class="caixaForm" type="password" name="senha" required><br><!--Senha do usuario - Campo obrigatório-->
    <button type="submit">Cadastrar</button>
</form>
<?php } ?>