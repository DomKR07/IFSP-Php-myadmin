<?php
    require '../../includes/verifica.php';
    $_SESSION['itens'] = array();

    function gerarNumeroAleatorio()
    {
        $prefixo = "PE";
        $numeroAleatorio = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $numeroFormatado = $prefixo . $numeroAleatorio;

        return $numeroFormatado;
    }

    $numeroGerado = gerarNumeroAleatorio();

    if (!empty($_SESSION['dados'])) {
        $primeiroItem = reset($_SESSION['dados']);
        $clienteId = $primeiroItem['ClienteId'];

        // Inserir o pedido fora do loop
        $inserirPedido = $pdo->prepare("INSERT INTO pedidos (ClienteId, CodigoPedido) VALUES (?, ?)");
        $inserirPedido->bindParam(1, $clienteId);
        $inserirPedido->bindParam(2, $numeroGerado);
        $inserirPedido->execute();

        // Recuperar o ID do pedido que acabou de ser inserido
        $pedidoId = $pdo->lastInsertId();

        foreach ($_SESSION['dados'] as $produtos) {
            $inserir = $pdo->prepare("INSERT INTO itens_pedido (PedidoId, ProdutoId, Nome, Imagem, Quantidade, Preco, Total, CodigoPedido) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $inserir->bindParam(1, $pedidoId);
            $inserir->bindParam(2, $produtos['ProdutoId']);
            $inserir->bindParam(3, $produtos['Nome']);
            $inserir->bindParam(4, $produtos['Imagem']);
            $inserir->bindParam(5, $produtos['Quantidade']);
            $inserir->bindParam(6, $produtos['Preço']);
            $inserir->bindParam(7, $produtos['Total']);
            $inserir->bindParam(8, $numeroGerado);
            $inserir->execute();

            header("Location: pedidos.php");
        }
    } else {
        echo "O carrinho está vazio.";
    }
?>
