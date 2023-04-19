<?php 

// valida se fez submit no form
if (isset($_POST["enviar"]))
{
    // recupera os dois valores do form
    $numero_inicial = $_POST["numero_inicial"];
    $numero_final   = $_POST["numero_final"];

    // valida para não executar quando inputs estiverem vazios 
    if (($numero_inicial == "") || ($numero_final == ""))
    {
        ?>
        <script>
            window.location.href = "index.php";
            alert("Preencha os valores!");
        </script>
        <?php
    }
    else 
    {
        // pega o intervalo
        $intervalo = $numero_final - $numero_inicial;

        // valida para não executar com intervalo menor do que 2 e maior que 100
        if (($intervalo < 2) || ($intervalo > 100))
        {
            ?>
            <script>
                window.location.href = "index.php";
                alert("O intervalo não pode ser menor do que 2 e nem maior do que 100!");
            </script>
            <?php
        }
        else 
        {
            // executa o laço de repetição percorrendo o contador para listar o intervalo
            for ($i= $numero_inicial + 1; $i < $numero_final; $i++) 
            { 
                // imprimi o contador
                echo "<br>".$i;
            } 
        }
    }
}