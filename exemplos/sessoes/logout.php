<?php 

session_start();

if (isset($_POST["logout"]))
{
    if (isset($_SESSION["alunos"])) 
    {
        unset($_SESSION["alunos"]);

        echo "Logout realizado";
    }
}
?>
<a href="alunos.php"><button>Ver sessão</button></a>