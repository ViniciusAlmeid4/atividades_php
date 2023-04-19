<?php 
session_start();

var_dump($_SESSION["alunos"]);

?>

<form action="logout.php" method="post">
    <input type="submit" name="logout" value="LOGOUT">
</form>
<a href="sessoes.php"><button>Criar Sessão</button></a>