<form action="login.php" method="post" style=" border: 2px solid black; padding: 10px; width: 300px; height: 200px; font-size: large; text-align: center; background-color: rgb(197, 190, 190);">
    Faça login para acessar a calculadora: <br><br>
    Login <br>
    <input type="text" name="usuario"> <br>
    Senha<br>
    <input type="password" name="senha"> <br><br>
    <input type="submit" value="Entrar">
</form>

<?php
//Exibe mensagem de erro, se existir
if (isset($_GET['msg'])) {
    echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "</p>";
}
?>
