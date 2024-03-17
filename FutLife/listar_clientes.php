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
    $consulta = $conexao->prepare('Select * from tabclientes');
    $consulta->execute();
?>

<head>
    <title>Lista de clientes</title>
</head>


<body>
   <h2>Listagem de clientes</h2>
   <table>
      <tr>
         <th>Código</th>
         <th>Nome</th>
         <th>Telefone</th>
         <th>Data Nasc.</th>
         <th colspan="2">Ações</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['cliId']}</td>";
         echo "<td>{$linha['cliNome']}</td>";
         echo "<td>{$linha['cliTelefone']}</td>";
         echo "<td>{$linha['cliDataNasc']}</td>";
         echo "<td><a href='alterar_cliente.php?id={$linha['cliId']}' class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
         echo "<td><a href='excluir_cliente.php?id={$linha['cliId']}' class='btn-floating blue'><i class='material-icons'>delete</i></a></td></tr>";
      }
      echo "</table>";
      echo "<a href='form_cadastrar_clientes.php' class='btn'>Adicionar clientes</a>";
      echo "<a href='consultar_clientes_form.html' class='btn pink'>Pesquisar clientes</a>";
      
      ?>
</body>
</html>
