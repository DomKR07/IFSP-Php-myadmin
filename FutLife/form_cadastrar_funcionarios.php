<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <title>Sysexemplo - Cadastro de Funcionários</title>
</head>
<body>
   <div class="row">
      <div class="col s12 m6 push-m3">
         <h3 class="light">Cadastro de Funcionários</h3>
         <form action="cadastrar_funcionarios.php" method="post">
            <div class="input-field col s12">
               <label for="nome">Nome: </label><br>
               <input type="text" name="funNome" id="nome">
            </div>
            <div class="input-field col s12">
               <label for="senha">Senha: </label><br>
               <input type="password" name="funSenha" id="senha">
            </div>
            <div class="input-field col s12">
               <label for="email">Email: </label><br>
               <input type="email" name="funEmail" id="email">
            </div>
            <div class="input-field col s12">
               <label for="cargo">Cargo: </label><br>
               <input type="text" name="funCargo" id="cargo">
            </div>
            <div class="input-field col s12">
               <label for="usuario">Usuário: </label><br>
               <input type="text" name="funUsuario" id="usuario">
            </div>
            <div class="input-field col s12">
               <label for="foto">Foto: </label><br><br>
               <input type="text" name="funFoto" id="foto">
            </div>
            <button type="submit" class="btn" name="btncadastrar">Cadastrar</button>            
            <a href="controle.php" class="btn green">Listar Funcionários</a>         
         </form> 
    </div>
   </div>
</body>
</html>
