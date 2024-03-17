<?php
require_once "config.php";
include_once "cabecalho.php";

$codigo = $_POST['proId'];
$descricao = $_POST['proDescricao'];
$imagem = $_POST['proImagem'];
$preco = $_POST['proPreco'];

echo "<h3>Alterando Dados do Produto</3>";
echo "<h5>Produto = $codigo </h5>";

//definindo a instrução SQL para alteração do registro
$altera = $conexao->prepare('UPDATE tabprodutos SET proDescricao=:descricao,
                                            proImagem=:imagem,
                                            proPreco=:preco WHERE proId =:cod');
$altera->bindValue(':cod', $codigo);
$altera->bindValue(':descricao', $descricao);
$altera->bindValue(':imagem', $imagem);
$altera->bindValue(':preco', $preco);
$altera->execute();

echo "<div class='card'><br>";
echo "<b>Descricao  = </b>$descricao<br>
      <b>Imagem     = </b>$imagem<br>
      <b>Preco      = </b>$preco<br>";
echo"</div>";

echo"<a href='controle.php' class='btn'>Listagem de produtos</a>";

include_once "rodape.php";
?>
