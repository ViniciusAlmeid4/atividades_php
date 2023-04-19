<?php 

$numero1 = $_POST["numero1"]; 
$numero2 = $_POST["numero2"]; 

$maior = 0;
$verifica_maior = true;

if($numero1 > $numero2)
{
    $maior = $numero1;    
}
else if($numero2 > $numero1)
{
    $maior = $numero2;    
}
else
{
    $verifica_maior = false;   
}

echo $verifica_maior ? "O maior número é o $maior" : "Os números são iguais!";

