<?php
    require_once 'config.php';

    if(isset($_POST['btncadastrar'])){
        $nome = filter_input(INPUT_POST,'funNome');
        $senha = filter_input(INPUT_POST,'funSenha');
        $email = filter_input(INPUT_POST,'funEmail');
        $cargo = filter_input(INPUT_POST,'funCargo');
        $usuario = filter_input(INPUT_POST,'funUsuario');
        $foto = filter_input(INPUT_POST,'funFoto');

        $sql = $conexao->prepare("INSERT into tabfuncionarios (funNome, funSenha, funEmail, funCargo, funUsuario, funFoto) VALUES (:nome, :senha, :email, :cargo, :usuario, :foto)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':senha',$senha);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':cargo',$cargo);
        $sql->bindValue(':usuario',$usuario);
        $sql->bindValue(':foto',$foto);
        $sql->execute();
        header('Location:listar_funcionarios.php');
    }
    echo "$nome $senha $email $cargo $usuario $foto";
?>
