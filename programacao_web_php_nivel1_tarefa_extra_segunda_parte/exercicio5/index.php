<?php
$melhor_taxa_extincao = 0.01;
$pior_taxa_extincao = 0.1;

define('PRIMEIRA_BIODIVERSIDADE', 2000000);
define('SEGUNDA_BIODIVERSIDADE',  100000000);

echo "------CASO 1--------- PRIMEIRA BIODIVERSIDADE MELHOR TAXA DE EXTINÇÃO";


$primeira_biodiversidade = PRIMEIRA_BIODIVERSIDADE;

$anoAtual = 2023;
$qtdeAnos = 0;

while ($primeira_biodiversidade > 1)
{
    $primeira_biodiversidade -= ($primeira_biodiversidade * $melhor_taxa_extincao) / 100;
    $qtdeAnos++;
}

echo "<br>Considerando uma biodiversidade com o número de ".PRIMEIRA_BIODIVERSIDADE."
espécies na antureza. <br> Na melhor das hipóteses em <br> ".$qtdeAnos." anos 
teremos a extinção das espécies";

echo "<br><br><br>------CASO 2--------- PRIMEIRA BIODIVERSIDADE PIOR TAXA DE EXTINÇÃO";


$primeira_biodiversidade = PRIMEIRA_BIODIVERSIDADE;

$anoAtual = 2023;
$qtdeAnos = 0;

while ($primeira_biodiversidade > 1)
{
    $primeira_biodiversidade -= ($primeira_biodiversidade * $pior_taxa_extincao) / 100;
    $qtdeAnos++;
}

echo "<br>Considerando uma biodiversidade com o número de ".PRIMEIRA_BIODIVERSIDADE."
espécies na antureza. <br> Na pior das hipóteses em <br> ".$qtdeAnos." anos 
teremos a extinção das espécies";

echo "<br><br><br>------CASO 3--------- SEGUNDA BIODIVERSIDADE MELHOR TAXA DE EXTINÇÃO";


$segunda_biodiversidade = SEGUNDA_BIODIVERSIDADE;

$anoAtual = 2023;
$qtdeAnos = 0;

while ($segunda_biodiversidade > 1)
{
    $segunda_biodiversidade -= ($segunda_biodiversidade * $melhor_taxa_extincao) / 100;
    $qtdeAnos++;
}

echo "<br>Considerando uma biodiversidade com o número de ".SEGUNDA_BIODIVERSIDADE."
espécies na antureza. <br> Na melhor das hipóteses em <br> ".$qtdeAnos." anos 
teremos a extinção das espécies";


echo "<br><br><br>------CASO 4--------- SEGUNDA BIODIVERSIDADE PIOR TAXA DE EXTINÇÃO";


$segunda_biodiversidade = SEGUNDA_BIODIVERSIDADE;

$anoAtual = 2023;
$qtdeAnos = 0;

while ($segunda_biodiversidade > 1)
{
    $segunda_biodiversidade -= ($segunda_biodiversidade * $pior_taxa_extincao) / 100;
    $qtdeAnos++;
}

echo "<br>Considerando uma biodiversidade com o número de ".SEGUNDA_BIODIVERSIDADE."
espécies na antureza. <br> Na pior das hipóteses em <br> ".$qtdeAnos." anos 
teremos a extinção das espécies";