<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form action="../model/inserirproduto.php" method="post">
        Nome do Produto:
        <input type= "text" name="cxproduto"/><br/>
        Data de Validade:
        <input type= "date" name="cxdata"/><br/>
        Quantidade:
        <input type= "number" name="cxqtde"/><br/>
        Valor:
        <input type= "text" name="cxvalor"/><br/>
        <input type="submit" value="Gravar"/>
    </form>
    <a href="../model/listarproduto.php">
        Listar Clientes
    </a>
    <br>
    <h3>Pesquisa de Produto</h3>
    <form action="../model/pesquisamodelproduto.php" method="POST">
        Digite o nome do produto: <br/>
        <input type="text" name="cxpesquisaproduto"/>
        <input type="submit" value="Pesquisar"/>
    </form>
    <a href="../index.php">
        Voltar
    </a>
    <a href="../index.php">
        Voltar
    </a>
</body>
</html>