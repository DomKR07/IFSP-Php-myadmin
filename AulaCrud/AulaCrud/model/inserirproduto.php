<?php
if($_POST['cxproduto']!="")
{
    include_once '../factory/conexao.php';

    $produto = $_POST['cxproduto'];
    $data = $_POST['cxdata'];
    $qtde = $_POST['cxqtde'];
    $valor = $_POST['cxvalor'];
    $sql = "INSERT INTO tbproduto(produto,datavalidade,qtde,valor) VALUES('$produto','$data','$qtde','$valor')";
    $query = mysqli_query($conn,$sql);
    echo "Dados cadastrados com sucesso";
}
else
{
    echo "Dados não cadastrados";
}