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
    $consulta = $conexao->prepare('Select * from tabfuncionarios');
    $consulta->execute();
?>

<head>
    <title>Lista de Funcionários</title>
</head>


<body>
   <h2>Listagem de Funcionários</h2>
   <table>
      <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>Senha</th>
         <th>Email</th>
         <th>Cargo</th>
         <th>Usuário</th>
         <th>Foto</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['funId']}</td>";
         echo "<td>{$linha['funNome']}</td>";
         echo "<td>{$linha['funSenha']}</td>";
         echo "<td>{$linha['funEmail']}</td>";
         echo "<td>{$linha['funCargo']}</td>";
         echo "<td>{$linha['funUsuario']}</td>";
         echo "<td><img src='Imagens/{$linha['funFoto']}.jpg' width='50' height='50' alt='Foto do Funcionário'><br></div>";
      }
      echo "</table>";
      echo "<a href='form_cadastrar_funcionarios.php' class='btn'>Adicionar Funcionário</a>";
      
      
      ?>
</body>
</html>
