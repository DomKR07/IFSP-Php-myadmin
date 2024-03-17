<?php
    include_once '../factory/conexao.php';
    $cod= $_GET["id"];
    $excluir = "DELETE FROM tbclientes WHERE cod='$cod'";

    $executar = mysqli_query($conn,$excluir);

    if($executar)
    {
        echo "<script>
            alert('Cliente excl com sucess')
            </script>";
        echo "<a href='listarcliente.php'>Voltar</a>";
    }else{
        echo"<script>
        alert('Dado não encontrado')
        </script>";
    }
?>