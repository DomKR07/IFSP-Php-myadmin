<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <title></title>
</head>
<body>
<?php
include_once 'config.php';
    $consulta = $conexao->prepare('Select * from tabprodutos');
    $consulta->execute();
?>

<head>
    <title>Lista de Produtos</title>
</head>


<body>
   <h2>Listagem de Produtos</h2>
   <table>
      <tr>
         <th>Código</th>
         <th>Descriçao</th>
         <th>Imagem</th>
         <th>Preco</th>
         <th colspan="2">Ações</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['proId']}</td>";
         echo "<td>{$linha['proDescricao']}</td>";
         echo "<td><img src='Imagens/{$linha['proImagem']}.jpg' width='150' height='170'><br></td>";
         echo "<td>{$linha['proPreco']}</td>";
         echo "<td><a href='alterar_produto.php?id={$linha['proId']}' class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
         echo "<td><a href='excluir_produto.php?id={$linha['proId']}' class='btn-floating blue'><i class='material-icons'>delete</i></a></td></tr>";
      }
      echo "</table>";
      echo "<a href='form_cadastrar_produtos.php' class='btn'>Adicionar produtos</a>";

    ?>
</body>
</html>
