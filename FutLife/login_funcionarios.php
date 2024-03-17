<?php
require_once "config.php";
include_once "cabecalho.php";

try {
    session_start();

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $funUsuario = $_POST["funUsuario"];
        $funSenha = $_POST["funSenha"];

        // Consulta SQL para verificar as credenciais
        $sql = "SELECT * FROM tabfuncionarios WHERE funUsuario = :usuario AND funSenha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':usuario', $funUsuario);
        $stmt->bindParam(':senha', $funSenha);
        $stmt->execute();

        // Verifica se a consulta retornou algum resultado
        if ($stmt->rowCount() > 0) {
            // Credenciais válidas, redireciona para a página de sucesso
            header("Location:controle.php");
            exit();
        } else {
            // Credenciais inválidas
            header("Location: form_login_funcionarios.php");
            echo "Login Inválido. Tente novamente.";
        }
    }
} catch (PDOException $e) {
    echo 'Erro na execução da consulta: ' . $e->getMessage();
}
?>
