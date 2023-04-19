<?php 

/*Recupera valores do formulário via GET*/
$nome            = $_GET["nome"];
$telefone        = $_GET["telefone"];
$email           = $_GET["email"];
$data_nascimento = $_GET["data_nascimento"];
$cep             = $_GET["cep"];
$endereco        = $_GET["endereco"];
$cidade          = $_GET["cidade"];
$estado          = $_GET["estado"];
?>

<table align="center" border="2">
    <tr>
        <td>Nome</td>
        <td><?php echo $nome; ?></td>
    </tr>
    <tr>
        <td>Telefone</td>
        <td><?php echo $telefone; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>Data de Nascimento</td>
        <td><?php echo $data_nascimento; ?></td>
    </tr>
    <tr>
        <td>Cep</td>
        <td><?php echo $cep; ?></td>
    </tr>
    <tr>
        <td>Endereço</td>
        <td><?php echo $endereco; ?></td>
    </tr>
    <tr>
        <td>Cidade</td>
        <td><?php echo $cidade; ?></td>
    </tr>
    <tr>
        <td>Estado</td>
        <td><?php echo $estado; ?></td>
    </tr>    
</table>