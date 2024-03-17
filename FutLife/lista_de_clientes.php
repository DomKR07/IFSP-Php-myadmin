<?php
include_once 'config.php';
include_once "cabecalho.php";
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

      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['cliId']}</td>";
         echo "<td>{$linha['cliNome']}</td>";
      }
      echo "</table>";

      include_once "rodape.php";

      ?>
</body>
</html>
