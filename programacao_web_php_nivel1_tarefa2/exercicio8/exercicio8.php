<?php 

if (isset($_POST["enviar"]))
{
    if (
        ($_POST["funcionario"] ==  "") || 
        ($_POST["salario_bruto"] ==  "") ||        
        ($_POST["vale_transporte"] ==  "") || 
        ($_POST["dependentes"] ==  "") || 
        ($_POST["dependentes"] < 0 )
    )    
    {
        echo "Você precisa preencher todos os campos corretamente!";
    }
    else 
    {

        if (!is_numeric($_POST["salario_bruto"]))
        {
            echo "Você precisa preencher um valor numérico para o salário!";
        }
        else 
        {
            $funcionario = $_POST["funcionario"];
            $salario_bruto = $_POST["salario_bruto"];        
            $vale_transporte = $_POST["vale_transporte"];
            $dependentes = $_POST["dependentes"];

            if ($vale_transporte == "sim")
            {
                $desconto_vale_transporte = ($salario_bruto * 6) /100;
            }
            else 
            {
                $desconto_vale_transporte = 0;
            }

            if ($salario_bruto <= 1655.98)
            {
                $salario_familia = 56.47 * $dependentes; 
            }
            else 
            {
                $salario_familia = 0;
            }

            // INSS 

            if ($salario_bruto <= 1212)
            {
                $desconto_inss = ($salario_bruto * 7.5) /100;
            }
            else if (($salario_bruto > 1212) && ($salario_bruto <= 2427.35))
            {
                $primeira_faixa = (1212 * 7.5) / 100;
                $diferenca_para_segunda_faixa = $salario_bruto - 1212;
                $segunda_faixa = ($diferenca_para_segunda_faixa * 9) /100;

                $desconto_inss = $primeira_faixa + $segunda_faixa;
            }
            else if (($salario_bruto > 2427.35) && ($salario_bruto <= 3641.03))
            {
                $primeira_faixa = (1212 * 7.5) / 100;                
                $segunda_faixa = (1215 * 9) /100;
                $diferenca_para_terceira_faixa = $salario_bruto - 2427.35;
                $terceira_faixa = ($diferenca_para_terceira_faixa * 12) /100;

                $desconto_inss = $primeira_faixa + $segunda_faixa  + $terceira_faixa;
            }
            else if (($salario_bruto > 3641.03) && ($salario_bruto <= 7087.22))
            {
                $primeira_faixa = (1212 * 7.5) / 100;                
                $segunda_faixa = (1215 * 9) /100;
                $terceira_faixa = (1213.68 * 12) /100;
                $diferenca_para_quarta_faixa = $salario_bruto - 3641.03;
                $quarta_faixa = ($diferenca_para_quarta_faixa * 14) /100;

                $desconto_inss = $primeira_faixa + $segunda_faixa  + $terceira_faixa + $quarta_faixa;
            }
            else if ($salario_bruto > 7087.22)
            {
                $desconto_inss = 828.39;
            }

            $salario_descontado_inss = $salario_bruto - $desconto_inss;

            if ($salario_bruto < 1903.98)
            {
                $desconto_imposto_renda = 0;
            }  
            else if (($salario_bruto > 1903.98) && ($salario_bruto < 2826.65))
            {
                $desconto_imposto_renda = ($salario_descontado_inss * 7.5 /100) - 142.8;
            } 
            else if (($salario_bruto > 2826.65) && ($salario_bruto < 3751.05))
            {
                $desconto_imposto_renda = ($salario_descontado_inss * 15 /100) - 354.8;
            }
            else if (($salario_bruto > 3751.05) && ($salario_bruto < 4664.68))
            {
                $desconto_imposto_renda = ($salario_descontado_inss * 22.5 /100) - 636.13;
            }   
            else if ($salario_bruto > 4664.68)
            {
                $desconto_imposto_renda = ($salario_descontado_inss * 27.5 /100) - 869.36;
            } 
            
            $fgts = ($salario_bruto * 8) /100;

            $salario_liquido = number_format($salario_bruto - $desconto_vale_transporte
            + $salario_familia - $desconto_inss - $desconto_imposto_renda, 2);
        
            $desconto_imposto_renda = number_format($desconto_imposto_renda, 2);
            $desconto_inss = number_format($desconto_inss, 2);

            echo "<hr><br>";
       
            echo "<table align='center' border='2'>
                <tr>
                    <td>Funcionário</td>
                    <td>Salário Bruto</td>
                    <td>FGTS</td>
                    <td>VALE Transporte</td>
                    <td>Dependentes</td>
                    <td>Salário Família</td>
                    <td>INSS</td>
                    <td>IR</td>
                    <td>Salário Líquido</td>
                </tr>
                <tr>                
                    <td>$funcionario</td>            
                    <td>$salario_bruto</td>  
                    <td>$fgts</td>         
                    <td>$desconto_vale_transporte</td>  
                    <td>$dependentes</td>  
                    <td>$salario_familia</td>
                    <td>$desconto_inss</td>  
                    <td>$desconto_imposto_renda</td> 
                    <td>$salario_liquido</td>                
                </tr>           
        </table>";
        }

    }
}