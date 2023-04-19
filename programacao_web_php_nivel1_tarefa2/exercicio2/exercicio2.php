<?php 

$numero = $_POST["numero"];

if ($numero > 0)
{
    echo "O número $numero é positivo";
}
else if ($numero < 0)
{
    echo "O número $numero é negativo";
}
else 
{
    echo "O número $numero é neutro";
}