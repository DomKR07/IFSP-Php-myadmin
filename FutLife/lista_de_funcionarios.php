<?php
include_once 'config.php';
include_once "cabecalho.php";
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
         <th>Email</th>
         <th>Cargo</th>
         <th>Usuário</th>
         <th>Foto</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['funId']}</td>";
         echo "<td>{$linha['funNome']}</td>";
         echo "<td>{$linha['funEmail']}</td>";
         echo "<td>{$linha['funCargo']}</td>";
         echo "<td>{$linha['funUsuario']}</td>";
         echo "<td><img src='Imagens/{$linha['funFoto']}.jpg' width='50' height='50' alt='Foto do Funcionário'><br></div>";
      }
      echo "</table>";
      
      include_once "rodape.php";
      ?>
</body>
</html>
