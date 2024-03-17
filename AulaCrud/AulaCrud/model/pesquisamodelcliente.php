<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Cliente</title>
</head>
<body>
    <form action="" method="POST">
        Digite o nome completo: <br/>
        <input type="text" name="cxpesquisacliente"/>
        <input type="submit" value="Pesquisar"/>
    </form>

    <br><br>
    
    <?php
    include_once '../factory/conexao.php';
    $pesqnome = $_POST["cxpesquisacliente"];
    $consultar = "select *from tbclientes where nome='$pesqnome'";
    $executar = mysqli_query($conn, $consultar);
    while($linha = mysqli_fetch_array($executar)){

    ?>
     
    
    <form action="">
        Nome:
        <input type= "text" name="cxnome"value="<?php echo $linha["nome"]?>"disabled/><br/>
        
        Email:
        <input type= "text" name="cxemail"value="<?php echo $linha["email"]?>"disabled/><br/>
        <br>
        
    </form>
    <?php
        }
    ?>
    <a href="../view/cadastrocliente.php">
        Voltar
    </a>
</body>
</html>