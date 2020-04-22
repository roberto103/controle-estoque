<?php

require_once 'conexao.php';
session_start();

$sql = $pdo->prepare('INSERT INTO produtos (modelo, estado_produto, valor_compra, valor_venda, numero_serie, imei, data_compra)
  SELECT modelo, estado_produto, valor_compra, valor_venda, numero_serie, imei, data_compra
  FROM produtos_vendidos WHERE id = :id');
$sql->bindValue(':id', $_GET['id']);
$sql->execute();

// Delete
$delete = $pdo->prepare('DELETE FROM produtos_vendidos WHERE id = :id');
$delete->bindValue(':id', $_GET['id']);
$delete->execute();

if ($sql && $delete) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Produto estornado!</div>';
  header('Location: ../historico_vendas.php');
} else {
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Falha ao estornar produto!</div>';
  header('Location: ../historico_vendas.php');
}
