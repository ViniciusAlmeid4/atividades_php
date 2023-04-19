<?php 

if (strlen($_POST["letra"]) > 1)
{
    echo "Você só pode inserir um caracter!";
}
else 
{
    $letra = strtolower($_POST["letra"]);
    
    if (
        ($letra == "a") || ($letra == "e") || ($letra == "i") ||
        ($letra == "o") || ($letra == "u")
    ) 
    {
        echo "A letra $letra é uma vogal";
    }
    else 
    {
        echo "A letra $letra é uma consoante";
    }
}
