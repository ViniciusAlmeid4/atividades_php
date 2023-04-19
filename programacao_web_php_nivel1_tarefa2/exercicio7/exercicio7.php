<?php 

if (
    (isset($_POST["salario_atual"])) && 
    ($_POST["salario_atual"] != "")
) 
{
    $salario_atual = $_POST["salario_atual"];

    if ($salario_atual <= 280)
    {
        $percentual_reajuste = 20;
        $reajuste = ($salario_atual * $percentual_reajuste) /100;
        $novo_salario = $salario_atual + $reajuste;
    }
    else if (($salario_atual > 280) && ($salario_atual <= 700))
    {
        $percentual_reajuste = 15;
        $reajuste = ($salario_atual * $percentual_reajuste) /100;
        $novo_salario = $salario_atual + $reajuste;
    }
    else if (($salario_atual > 700) && ($salario_atual <= 1500))
    {
        $percentual_reajuste = 10;
        $reajuste = ($salario_atual * $percentual_reajuste) /100;
        $novo_salario = $salario_atual + $reajuste;
    }
    else if ($salario_atual > 1500)
    {
        $percentual_reajuste = 5;
        $reajuste = ($salario_atual * $percentual_reajuste) /100;
        $novo_salario = $salario_atual + $reajuste;
    }
    ?>
       
    <table align="center" border="2"> <!-- table>tr*2>td*4 -->
        <tr>
            <th>Salário Atual</th>
            <th>Percentual</th>
            <th>Reajuste</th>
            <th>Novo Salário</th>
        </tr>
        <tr>
            <td><?php echo $salario_atual; ?></td>
            <td><?php echo $percentual_reajuste; ?></td>
            <td><?php echo $reajuste; ?></td>
            <td><?php echo $novo_salario; ?></td>
        </tr>    
    <?php
}
else 
{
    echo "Você deve preencher o salário atual!";
}