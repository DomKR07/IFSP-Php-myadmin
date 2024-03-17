<?php
include_once "cabecalho.php";
require_once "config.php";

$id = $_GET['id'];
//$id = 2;
$consulta = $conexao->prepare('SELECT * FROM tabprodutos WHERE proId = :id');
$consulta->bindValue(':id', $id);
$consulta->execute();


$linha = $consulta->fetch(PDO::FETCH_ASSOC);


$codigo = $id;
$descricao = $linha['proDescricao'];
$imagem = $linha['proImagem'];
$preco = $linha['proPreco'];


echo "<div class='row'>";
echo "<div class='col s12 m6 push-m3'>";
 echo "<h2>Excluir produto?</h2>";
echo "<b>Código     = </b>$codigo<br>
      <b>Descricao  = </b>$descricao<br>
      <b>Imagem     = </b>$imagem <br>
      <b>Preco      = </b>$preco<br>";
echo "<a href='listar_produtos.php' class='btn'>Listagem de produtos</a>";
echo "<a href='excluir_produto_action.php?id=$codigo' class='btn red'>Sim, excluir registro.</a>";
echo "</div></div></div>";
include_once "rodape.php";


?>
