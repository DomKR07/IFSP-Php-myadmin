<?php
    require_once '../../includes/config.php';

    session_start();

    if (isset($_POST['btncadastrar'])) {
        $nome = ucwords(strtolower(filter_input(INPUT_POST, 'txtnome')));
        $telefone = filter_input(INPUT_POST, 'txtelefone');
        $email = filter_input(INPUT_POST, 'txtemail');

        $cadastrar = $pdo->prepare("INSERT into fornecedores (NomeFornecedor, Telefone, EmailFornecedor) VALUES (:nome, :telefone, :email)");
        
        $cadastrar->bindValue(':nome', $nome);
        $cadastrar->bindValue(':telefone', $email);
        $cadastrar->bindValue(':email', $email);
        $cadastrar->execute();

        header('Location: fornecedores.php');
        exit(); 
    }
?>