<?php
include_once "cabecalho.php";
require_once "config.php";


$codigo = $_GET['id'];
echo "codigo = ".$codigo;




$exclui = $conexao->prepare('DELETE FROM tabclientes WHERE cliId=:id');
$exclui->bindValue(':id', $codigo);
$exclui->execute();
header('Location: controle.php');




include_once "rodape.php";


?>
