<?php
    require '../../includes/verifica.php';

    if (isset($_SESSION['idcli']) && !empty($_SESSION['idcli'])):

    if (!isset($_SESSION['itens'])) {
        $_SESSION['itens'] = array();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['ProdutoId'])) {
            $idproduto = $_POST['ProdutoId'];
            $quantidadeFieldName = 'qtd' . $idproduto;
            $quantidade = isset($_POST[$quantidadeFieldName]) ? intval($_POST[$quantidadeFieldName]) : 1;    

            if (!isset($_SESSION['itens'][$idproduto])) {
                $_SESSION['itens'][$idproduto] = $quantidade;
            } else {
                $_SESSION['itens'][$idproduto] += $quantidade;
            }
        }

        if (isset($_POST['remover'])) {
            $idRemover = $_POST['remover'];
            if (isset($_SESSION['itens'][$idRemover])) {
                unset($_SESSION['itens'][$idRemover]);
            }
        }

        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }

    $totalCarrinho = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/css_usuario/css-carrinho.css">
    <link rel="icon" href="../../img/logo.png">
    <title>Açougu-E - Carrinho</title>
</head>
<body>
    <?php include_once "nav_usuario.php"; ?> 
    <main>
        <div class="container">
            <h1 id="titulo_carrinho">Carrinho</h1>
            <form action="" method="post">
                <?php if (count($_SESSION['itens']) == 0): ?>
                    <h2>Sem itens no carrinho, volte para a página de compras!</h2><br><br>
                    <a href="shop.php" class="a_btn">Voltar</a>
                <?php else: ?>
                    <ul class="container produtos">
                        <?php
                            $_SESSION['dados'] = array();

                            foreach ($_SESSION['itens'] as $idproduto => $quantidade){
                                $select = $pdo->prepare("SELECT * FROM estoque WHERE ProdutoId=?");
                                $select->bindParam(1, $idproduto);
                                $select->execute();
                                $produtos = $select->fetchAll();

                                if (!empty($produtos) && isset($produtos[0])) {
                                    $produto = $produtos[0];
                                    $precoTotalItem = $quantidade * $produto["PrecoUnitario"];
                        ?>
                        <li class="container produtos cartao">
                            <span><b><?= $produto["NomeProduto"] ?></b></span>
                            <img src="../../img/<?= $produto["fotoProduto"]; ?>" alt="corte">
                            <div>
                                <h2><?= $quantidade ?>kg</h2>
                                <h2><?= $quantidade ?> und.</h2>
                            </div>
                            <h1>Preço: R$<?= $produto["PrecoUnitario"] ?></h1>
                            <button type="submit" name="remover" value="<?= $idproduto ?>" class="btn-remover"><img src="../../img/excluir.png" alt="excluir"></button>
                        </li>
                        <?php
                            $totalCarrinho += $precoTotalItem;
                            array_push(
                                $_SESSION['dados'],
                                array(
                                    'ProdutoId' => $idproduto,
                                    'Nome' => $produto["NomeProduto"],
                                    'Imagem' =>  $produto["fotoProduto"],
                                    'Quantidade' =>  $quantidade,
                                    'Preço' => $produto["PrecoUnitario"],
                                    'Total' => $precoTotalItem,
                                    'ClienteId' => $_SESSION['idcli']
                                )
                                );
                                }
                            }
                        ?>
                    </ul>
                    <?php if ($totalCarrinho > 0): ?>
                        <h1 id="preco_final">Preço final: R$<?= $totalCarrinho ?></h1>
                        <br>
                        <a href="pedidos_processamento.php" class="a_btn">Realizar pedido</a>
                    <?php endif; ?>
            </form>
            <br>
                <a href="<?= $_SERVER['HTTP_REFERER'] ?>"><button class="a_btn">Adicionar Mais Itens</button></a>
            <?php endif; ?>
        </div>
    </main>
    <?php include_once "footer_usuario.php"; ?>
    <script src="../../js/menu.js"></script>
</body>
</html>
<?php 
    else: 
        header("Location: ../../index.php");
        exit();
    endif;
?>
