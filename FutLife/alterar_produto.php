<?php
require_once "config.php";//incluindo o arquivo de conexão com o banco de dados
include_once "cabecalho.php";//incluindo o arquivo de cabeçalho com acesso ao materializze

$codigo = $_GET['id'];//obtendo o código do cliente selecionado, a partir da lista de clientes,
$consulta = $conexao->prepare('SELECT * FROM tabprodutos WHERE proId = :code');
$consulta->bindValue(':code', $codigo);
$consulta->execute();

$linha = $consulta->fetch(PDO::FETCH_ASSOC);//armazenando o rgistro selecionado
?>
<div class="row">
   <div class="col s12 m6 push-m3">
      <h3 class="light">Alterando Produtos</h3>
      <?php echo "Produto: {$linha['proId']}"; ?>
      <form action="altera_produto_action.php" method="post">
         <input type="hidden" name="proId" value="<?php echo $linha['proId']; ?>">
         <div class="input-field col s12">
            <label for="descicao">Descrição: </label><br>
            <input type="text" name="proDescricao" id="descricao" value="<?php echo"{$linha['proDescricao']}";?>">
         </div>
         <div class=" input-field col s12">
            <label for="imagem">Imagem: </label><br>
            <input type="text" name="proImagem" id="imagem" value="<?php echo"{$linha['proImagem']}";?>">
         </div>
         <div class=" input-field col s12">
            <label for="preco">Preco: </label><br>
            <input type="text" name="proPreco" id="preco" value="<?php echo"{$linha['proPreco']}";?>">
         </div>
         <button type=" submit" class="btn" name="btnalterar">Alterar </button>
         <a href="listar_produtos.php" class="btn green">Listar Produtos</a>
      </form>


   </div>
</div>