<?php 

/*Escreva um programa que lê a largura e altura de um quadrado e imprime um quadrado daquele 
tamanho com asteriscos e espaços em branco. 

Exemplo: Altura 10, largura 20

*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*
*																			*
*																			*
*					USE TABLE												*
*																			*
*																			*
*																			*
*																			*
*																			*
*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*	*/


?>

<table align="center">
<?php 

    if (isset($_POST["enviar"]))
    {
        if (($_POST["largura"] == "") || ($_POST["altura"] == ""))
        {
            echo "Os campos altura e largura devem serem preenchidos";
            exit;
        }

        $largura = $_POST["largura"];
        $altura  = $_POST["altura"];

        // faz a linha de cima do quadrado na horizontal
        echo "<tr>";
        for ($i=0; $i < $largura; $i++) 
        { 
            echo "<td>*</td>";
        }
        echo "</tr>";

        
        // esse laço faz as linhas verticais do quadrado, do lado esquerdo e depois direito
        // coloquei -2 porque a largura já fez um asterisco acima e depois fará abaixo 
        for ($i=0; $i < $altura - 2; $i++) 
        {        
            echo "<tr>
                    <td>*</td>"; // faz a coluna do lado esquerdo
                    for ($j=0; $j < $largura - 2; $j++) 
                    {  
                        // coloca espaço para fazer o outro lado da linha vertical do quadrado
                        echo "<td></td>";
                    }
            echo    "<td>*</td>"; /* faz a coluna do lado direito*/    
            echo    "</tr>";
        }

        // faz a linha de baixo do quadrado na horizontal
        echo "<tr>";
        for ($i=0; $i < $largura; $i++) 
        { 
            echo "<td>*</td>";
        }
        echo "</tr>";
    }
?>
</table>
