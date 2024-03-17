<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <title>Sysexemplo - Login de Funcionários</title>
</head>
<body>
   <div class="row">
      <div class="col s12 m6 push-m3">
         <h3 class="light">Login de Funcionários</h3>
         <form action="login_funcionarios.php" method="post">
            <div class="input-field col s12">
               <label for="usuario">Usuário: </label><br>
               <input type="text" name="funUsuario" id="usuario">
            </div>
            <div class="input-field col s12">
               <label for="senha">Senha: </label><br>
               <input type="password" name="funSenha" id="senha">
            </div>
            <button type="submit" class="btn" name="btnlogin">Login</button>            
            <button type="reset" class="btn red" name="btncancelar">Cancelar</button>        
         </form> 
      </div>
   </div>
</body>
</html>
