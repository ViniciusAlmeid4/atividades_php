<?php 

$salario_hora = $_POST["salario_hora"];
$valor_hora   = $_POST["valor_hora"];

$salario_mensal = $salario_hora * $valor_hora;

echo "O seu salario mensal corresponde a: $salario_mensal";