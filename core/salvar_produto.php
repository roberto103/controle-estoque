<?php

require_once 'conexao.php';
require_once 'util.php';
session_start();

$modelo = $_POST['modelo'];
$valor_compra = decimalBanco($_POST['valor_compra']);
$valor_venda = decimalBanco($_POST['valor_venda']);
$imei = $_POST['imei'];
$numero_serie = $_POST['numero_serie'];
$imei = $_POST['imei'];
$estado_produto = $_POST['estado_produto'];

$salvar = $pdo->prepare('INSERT INTO produtos (modelo, estado_produto, valor_compra, valor_venda, imei, numero_serie) VALUES (:modelo, :estado_produto, :valor_compra, :valor_venda, :imei, :numero_serie)');
$salvar->bindValue(':modelo', $modelo);
$salvar->bindValue(':estado_produto', $estado_produto);
$salvar->bindValue(':valor_compra', $valor_compra);
$salvar->bindValue(':valor_venda', $valor_venda);
$salvar->bindValue(':imei', $imei);
$salvar->bindValue(':numero_serie', $numero_serie);
$result = $salvar->execute();

if ($result) {
  header("Location: ../produtos.php");
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro ao salvar no Banco de Dados!</div>';
  header("Location: ../produtos.php");
}
?>
