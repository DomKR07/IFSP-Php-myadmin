<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Produto</title>
</head>
<body>
    <?php
    include_once '../factory/conexao.php';
    $pesqprod = $_POST["cxpesquisaproduto"];
    $consultar = "select *from tbproduto where produto='$pesqprod'";
    $executar = mysqli_query($conn, $consultar);
    $linha = mysqli_fetch_array($executar);

    ?>
    <form>
        Produto:
        <input type= "text" name="cxproduto"value="<?php echo $linha["produto"]?>"disabled/><br/>
        Data de validade:
        <input type= "date" name="cxdata"value="<?php echo $linha["datavalidade"]?>"disabled/><br/>
        Quantidade:
        <input type= "number" name="cxqtde"value="<?php echo $linha["qtde"]?>"disabled/><br/>
        Valor:
        <input type= "text" name="cxvalor"value="<?php echo $linha["valor"]?>"disabled/><br/>

    </form>
</body>
</html>