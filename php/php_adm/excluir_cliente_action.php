<?php
    require_once "../../includes/config.php";

    $codigo = $_GET['txtid'];

    $excluiPedidos = $pdo->prepare('DELETE FROM itens_pedido WHERE PedidoId IN (SELECT PedidoId FROM pedidos WHERE ClienteId = :id)');
    $excluiPedidos->bindValue(':id', $codigo);
    $excluiPedidos->execute();

    $excluiPedidos = $pdo->prepare('DELETE FROM pedidos WHERE ClienteId = :id');
    $excluiPedidos->bindValue(':id', $codigo);
    $excluiPedidos->execute();

    $excluiCliente = $pdo->prepare('DELETE FROM clientes WHERE ClienteId = :id');
    $excluiCliente->bindValue(':id', $codigo);
    $excluiCliente->execute();

    header('Location: clientes.php');
?>
