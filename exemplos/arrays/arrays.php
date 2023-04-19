<?php 

/*
ARRAY UNIDIMENSIONAL*/
$animais = array(
    "Réptil" => "Serpente",
    "Marsupial" => "Coala",
    "Placentário" => "Tamandua"
);

foreach($animais as $key => $value)
{
    echo "<br>Chave: ".$value." Valor: ".$value;
}

echo "<hr>";

/* ARRAY BIDIMENSIONAL*/
$animais = array(
    "Réptil" => array(
        "Proteoglifos" => "Coral",
        "Soleglifos"   => "Cascavel"
    ),    
);

foreach($animais as $key => $reptil)
{    
    foreach($reptil as $chave => $serpentes)
    {
        echo "<br>Chave: ".$serpentes." Valor: ".$serpentes;
    }
}

echo "<hr>";

/* ARRAY TRIDIMENSIONAL */
$animais = array(
    "Réptil" => array(
        "Taipan" => array(
            "Costeira" => "Taipan Costeira",
            "Interior" => "Taipan do Interior",
        ),        
    ),    
);

echo "<hr>";

foreach($animais as $key => $reptil)
{    
    foreach($reptil as $chave => $taipan)
    {
        foreach($taipan as $chave2 => $especime)
        {
            echo "<br>Chave: ".$chave2." Valor: ".$especime;
        }       
    }
}

echo "<hr>";

echo $animais["Réptil"]["Taipan"]["Interior"];

echo "<hr>";

$alunos["perguntador1"] = "Gilmar";
$alunos["perguntador2"] = "Ronildo";
$alunos["galanteador_novinhas"] = "Vinicius";

echo $alunos["galanteador_novinhas"];

echo "<hr>";

$alunos = array(
    "perguntador1" => "Gilmar",
    "galanteador_novinhas" => "Vinicius"
);

echo $alunos["perguntador1"];

echo "<hr>";

var_dump($alunos);
