<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Digite qualquer coisa</td>
                <td><input type="text" name="valor"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 

if (isset($_POST["enviar"])) 
{
    $valor = $_POST["valor"];

    $valor = intval($valor);

    if (is_int($valor))
    {
        echo "<br>O valor $valor corresponde a um inteiro";

        $valor = strval($valor);
        
        if (is_string($valor))
        {
            echo "<br>O valor $valor corresponde a um string";
        }
    }

    $valor = floatval($valor);

    if (is_float($valor))
    {
        echo "<br>O valor $valor corresponde a um float";
    }

    $valor = boolval($valor);

    if (is_bool($valor))
    {
        echo "<br>O valor $valor corresponde a um boleano";
    }

    $valor = intval($valor);    
}