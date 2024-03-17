<?php
    require_once '../../includes/config.php';

    session_start();

    if (isset($_POST['btncadastrar'])) {
        $nome = ucwords(strtolower(filter_input(INPUT_POST, 'txtnome')));
        $email = filter_input(INPUT_POST, 'txtemail');

        $select = $pdo->prepare("SELECT Email FROM clientes WHERE Email = :email");
        $select->bindValue(':email', $email);
        $select->execute();

        if ($select->rowCount() > 0) {
            $_SESSION['erro_cadastro']++;
            header("Location: cadastro.php");
            exit(); 
        }

        $senha = filter_input(INPUT_POST, 'txtsenha');
        $endereco = filter_input(INPUT_POST, 'txtendereco');

        $cadastrar = $pdo->prepare("INSERT into clientes (Nome, Email, Senha, Endereco) VALUES (:nome, :email, :senha, :endereco)");
        $cadastrar->bindValue(':nome', $nome);
        $cadastrar->bindValue(':email', $email);
        $cadastrar->bindValue(':senha', $senha);
        $cadastrar->bindValue(':endereco', $endereco);
        $cadastrar->execute();

        header('Location: login.php');
        exit(); 
    }
?>
