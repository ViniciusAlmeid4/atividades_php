<?php 

if (
    !isset($_POST["aluno"]) || !isset($_POST["nota1"]) ||
    !isset($_POST["nota2"]) || !isset($_POST["nota3"]) || 
    !isset($_POST["nota4"])
) 
{
    echo "Você precisa submeter o formulário!";
}
else if(
    ($_POST["aluno"] == "") || ($_POST["nota1"] == "")  || 
    ($_POST["nota2"] == "") ||  ($_POST["nota3"] == "") || 
    ($_POST["nota4"] == "") 
)
{
    echo "Você precira preencher todos os campos!";
}
else 
{
    $aluno = $_POST["aluno"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;

    if ($media >= 70)
    {
        echo "A média do aluno $aluno corresponde a $media e portanto 
        o aluno está Aprovado";
    }
    else if (($media >= 50) && ($media <= 69))
    {
        echo "A média do aluno $aluno corresponde a $media e portanto 
        o aluno está em recuperação";
    }
    else if (($media >= 0) && ($media < 50))
    {
        echo "A média do aluno $aluno corresponde a $media e portanto 
        o aluno está reprovado";
    }
    else 
    {
        echo "Você inseriu valores fora do intervalor entre 0 e 100 para as notas!";
    }
}

