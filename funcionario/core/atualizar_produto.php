<?php

require_once 'conexao.php';
require_once 'util.php';
session_start();

$id = $_POST['id'];
$modelo = $_POST['modelo'];
$data_compra = $_POST['data_compra'];
$valor_compra = decimalBanco($_POST['valor_compra']);
$valor_venda = decimalBanco($_POST['valor_venda']);
$imei = $_POST['imei'];
$numero_serie = $_POST['numero_serie'];
$estado_produto = $_POST['estado_produto'];

$salvar = $pdo->prepare('UPDATE produtos SET modelo = :modelo, data_compra = :data_compra, valor_compra = :valor_compra, valor_venda = :valor_venda, imei = :imei, numero_serie = :numero_serie, estado_produto = :estado_produto WHERE id = :id');
$salvar->bindValue(':modelo', $modelo);
$salvar->bindValue(':data_compra', $data_compra);
$salvar->bindValue(':valor_compra', $valor_compra);
$salvar->bindValue(':valor_venda', $valor_venda);
$salvar->bindValue(':imei', $imei);
$salvar->bindValue(':numero_serie', $numero_serie);
$salvar->bindValue(':estado_produto', $estado_produto);
$salvar->bindValue(':id', $id);
$result = $salvar->execute();

if ($result) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Produto atualizado com sucesso!</div>';
  header('Location: ../produtos.php');
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Falha ao tentar atualizar o produto!</div>';
  header('Location: ../produtos.php');
}

?>
