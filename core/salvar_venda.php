<?php

require_once 'conexao.php';
require_once 'util.php';

$modelo = $_POST['modelo'];
$estado_produto = $_POST['estado_produto'];
$quantidade = $_POST['quantidade_produto'];
$valor_compra = $_POST['valor_compra'];
$valor_venda = $_POST['valor_venda'];
$numero_serie = $_POST['numero_serie'];
$imei = $_POST['imei'];

$lucro = $valor_venda - $valor_compra;

$salvar = $pdo->prepare('INSERT INTO produtos_vendidos (modelo, estado_produto, quantidade_vendidade, valor_compra, valor_venda, lucro, numero_serie, imei) VALUES (:modelo, :estado_produto, :quantidade, :valor_compra, :valor_venda, :lucro, :numero_serie, :imei)');
$salvar->bindValue(':modelo', $modelo);
$salvar->bindValue(':estado_produto', $estado_produto);
$salvar->bindValue(':quantidade', $quantidade);
$salvar->bindValue(':valor_compra', $valor_compra);
$salvar->bindValue(':valor_venda', $valor_venda);
$salvar->bindValue(':lucro', $lucro);
$salvar->bindValue(':numero_serie', $numero_serie);
$salvar->bindValue(':imei', $imei);
$result = $salvar->execute();

if ($result) {
  header("Location: ../produtos.php");
}else{
  header("Location: ../produtos.php");
}
?>
