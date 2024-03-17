<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Cliente</title>
</head>
<body>
    <?php
    include_once '../factory/conexao.php';
    $pesqnome = $_POST["cxpesquisacliente"];
    $consultar = "select *from tbclientes where nome='$pesqnome'";
    $executar = mysqli_query($conn, $consultar);
    $linha = mysqli_fetch_array($executar);

    ?>
    <form>
        Nome:
        <input type= "text" name="cxnome"value="<?php echo $linha["nome"]?>"disabled/><br/>
        
        Email:
        <input type= "text" name="cxemail"value="<?php echo $linha["email"]?>"disabled/><br/>
        <br>
        <a href="../index.php">
        Voltar
        </a>
    </form>

</body>
</html>