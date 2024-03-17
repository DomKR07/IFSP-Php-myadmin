<?php
session_start();
global $pdo;
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=dbprojeto', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERRO na conexão com o banco de dados: ". $e->getMessage();
    }
?>
