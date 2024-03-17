<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <form action="../model/inserircliente.php" method="post">
        Nome:
        <input type= "text" name="cxnome"/><br/>
        Email:
        <input type= "text" name="cxemail"/><br/>
        <input type="submit" value="Gravar"/>
    </form>
    <a href="../model/listarcliente.php">
        Listar Clientes
    </a>
    <br>
    <h3>Pesquisa de Cliente</h3>
    <form action="../model/pesquisamodelcliente.php" method="POST">
        Digite o nome completo: <br/>
        <input type="text" name="cxpesquisacliente"/>
        <input type="submit" value="Pesquisar"/>
    </form>
    <a href="../index.php">
        Voltar
    </a>
</body>
</html>