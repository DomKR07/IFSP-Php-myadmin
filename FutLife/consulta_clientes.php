<?php
   include_once 'config.php';
   include_once "cabecalho.php";

   echo "<h1>Consulta Clientes</h1>";

   $campos_form = filter_input_array(INPUT_GET, FILTER_DEFAULT);

    if(!empty($campos_form['txtPesquisar'])) {

        $dado = "%" . $campos_form['txtPesquisar'] . "%";

        $sql = "SELECT * FROM tabclientes WHERE clinome LIKE :valor ORDER BY cliNome";
        $consulta = $conexao->prepare($sql);//resultados da consulta
        $consulta->bindParam(':valor', $dado);
        $consulta->execute();

        //exibindo os resultados
        while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
            extract($registro);
            echo "<h5>ID: $cliId </h5>";
            echo "<h5>Nome: $cliNome</h5>";
            echo "<h5>Telefeone: $cliTelefone </h5>";
            echo "<hr>";
        }  
    }
    include_once "rodape.php"
?>