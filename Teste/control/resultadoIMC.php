<?php
include_once '../model/conexao.php';
include '../model/inserircliente.php';

    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $IMC = $peso / ($altura * $altura);

    echo "Resultado: " . $IMC;
    echo "<br/>";

    if ($IMC < 18.5) {
        echo "$nome seu IMC é de Magreza";
    } else if ($IMC >= 18.5 && $IMC <= 24.9) {
        echo "$nome seu IMC é Normal";
    } else if ($IMC >= 25 && $IMC <= 29.9) {
        echo "$nome seu IMC é de Sobrepeso";
    } else if ($IMC >= 30 && $IMC <= 39.9) {
        echo "$nome seu IMC é de Obesidade";
    } else if ($IMC >= 40) {
        echo "$nome seu IMC é de Obesidade Grave";
    }
    echo '<script>alert("Dados salvos no banco de dados!")</script>'
?>
