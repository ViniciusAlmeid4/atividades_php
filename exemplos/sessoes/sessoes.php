<?php 

$melhoresAlunos = array(
    "Matemática" => "Ronnie",
    "Física"     => "Cleverton",
    "Astronomia" => "Anderson"
);

session_start();

if (!isset($_SESSION["contador"]))
{
    $_SESSION["contador"] = 0;
}
else 
{
    $_SESSION["contador"]++;
}

$_SESSION["alunos"][$_SESSION["contador"]] = $melhoresAlunos;

?>

<a href="alunos.php"><button>Ver sessão</button></a>