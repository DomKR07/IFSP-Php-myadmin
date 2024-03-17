<?php
require_once 'config.php';

if (isset($_POST['btncadastrar'])) {
        $descricao = filter_input(INPUT_POST, 'proDescricao');
        $imagem = filter_input(INPUT_POST, 'proImagem');
        $preco = filter_input(INPUT_POST, 'proPreco');

        $sql = $conexao->prepare("INSERT into tabprodutos (proDescricao, proImagem, proPreco) VALUES (:descricao, :imagem, :preco)");
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':imagem', $imagem);
        $sql->bindValue(':preco', $preco);
        $sql->execute();

        header('Location: listar_produtos.php');
    }

echo "$descricao $imagem $preco";
?>
