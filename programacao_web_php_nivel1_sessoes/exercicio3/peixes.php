<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once("menu.php"); ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Cadastre um peixe></td>
                <td><input type="text" name="peixe"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="cadastrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 

if (isset($_POST["cadastrar"]))
{
    session_start();

    if (!isset($_SESSION["contador"]))
    {
        $_SESSION["contador"] = 0;
    }
    else 
    {
        $_SESSION["contador"]++;
    }

    if (!isset($_SESSION["peixes"]))
    {
        $_SESSION["peixes"] = "Peixe";
    }

    $_SESSION["animais"][$_SESSION["contador"]][$_SESSION["peixes"]] = $_POST["peixe"];
    
    var_dump($_SESSION["animais"]);
}