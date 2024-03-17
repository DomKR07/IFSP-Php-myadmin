<?php
require_once 'conexao.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome']; 
    
    $sql = $conexao->prepare("INSERT INTO cliimc (Nome) VALUES (:nome)");
    $sql->bindValue(':nome', $nome);
    $sql->execute();
}
?>
