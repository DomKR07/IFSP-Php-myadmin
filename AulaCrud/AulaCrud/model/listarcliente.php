<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Cliente</title>
</head>
<body>
    <?php
    include_once '../factory/conexao.php';
    $consultar = "SELECT *FROM tbclientes";
    $executar = mysqli_query($conn, $consultar);
    while($linha = mysqli_fetch_array($executar))
    {

    
    ?>
    <form>
        Nome:
        <input type= "text" name="cxnome"value="<?php echo $linha["nome"]?>"/><br/>
        
        Email:
        <input type= "text" name="cxemail"value="<?php echo $linha["email"]?>"/><br/>

        <a href="excluircliente.php?id=<?php echo $linha['cod'];?>">X</a>
    </form>
    <?php
        }
    ?>
    <br>
    <a href="../view/cadastrocliente.php">Voltar</a>
    <br>
    <br>
</body>
</html>