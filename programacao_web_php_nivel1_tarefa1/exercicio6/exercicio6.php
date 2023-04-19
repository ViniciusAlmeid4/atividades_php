<?php 

$peso   = $_POST["peso"];
$altura = $_POST["altura"];

// $imc = $peso / ($altura * $altura);

$altura_ao_quadrado = pow($altura, 2); // pow é utilizado para potência

$imc = $peso / $altura_ao_quadrado;

$imc = number_format($imc, 2); // deixa com duas casas decimais

echo "Seu IMC corresponde a: $imc";