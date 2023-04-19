<?php

if(isset($_POST["enviar"])){

    if($_POST["altura"] == "" || $_POST["largura"] == ""){
        ?>
        <script>
        window.location.href = "index.php"/
        alert("Preencha os valores da forma correta")
        </script>
        <?php
    }else{
        $altura = $_POST["altura"];
        $largura = $_POST["largura"];
        $altura = floatval($altura);
        $largura = floatval($largura);

        if(is_float($altura) != TRUE || is_float($largura) != TRUE){
            ?>
            <script>
            window.location.href = "index.php"/
            alert("Preencha os valores da forma correta")
            </script>
            <?php
        }else{
            echo "<table align='center'>";
            for($linha = 0; $linha < $altura; $linha++){

                echo "<tr>";
                for($coluna = 0; $coluna < $largura; $coluna++){
                    if($linha == 0 || $linha == $altura-1){
                        echo "<td>*</td>";
                    }else{
                        if($coluna == 0 || $coluna == $largura-1){
                            echo "<td>*</td>";
                        }else{
                            echo "<td></td>";
                        }
                    }
                }
                echo "</tr>";
                
            }
            echo "</table>";
        }
    }
}