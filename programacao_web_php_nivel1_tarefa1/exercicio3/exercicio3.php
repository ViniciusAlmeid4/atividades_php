<?php 

$aluno = $_POST["aluno"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "A média corresponde a $media";

