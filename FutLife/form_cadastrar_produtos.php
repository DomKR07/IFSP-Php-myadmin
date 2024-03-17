<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <title>Sysexemplo - Cadastro de Produtos</title>
</head>
<body>
   <div class="row">
      <div class="col s12 m6 push-m3">
         <h3 class="light">Cadastro de produtos</h3>
         <form action="cadastrar_podutos.php" method="post">
            <div class="input-field col s12">
               <label for="descricao">Descrição: </label><br>
               <input type="text" name="proDescricao" id="descricao">
            </div>
            <div class="input-field col s12">
               <label for="imagem">Imagem: </label><br>
               <input type="text" name="proImagem" id="imagem">
            </div>
            <div class="input-field col s12">
               <label for="preco">Preço: </label><br>
               <input type="text" name="proPreco" id="preco">
            </div>
            <button type="submit" class="btn" name="btncadastrar">Cadastrar</button>            
            <a href="controle.php" class="btn green">Listar Produtos</a>         
         </form> 
      </div>
   </div>
</body>
</html>
