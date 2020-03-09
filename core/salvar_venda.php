<?php

require_once 'conexao.php';
require_once 'util.php';
session_start();

// Pega todos os dados do produto
$produto = $pdo->prepare('SELECT * FROM produtos WHERE id = :id');
$produto->bindValue(':id', $_POST['id']);
$produto->execute();
$produtos = $produto->fetch(PDO::FETCH_OBJ);

// Calculo do lucro
$lucro = $produtos->valor_venda - $produtos->valor_compra;

// Data da venda
$data = date("Y-m-d H:i:s");

// Salvar na tabela Produtos Vendidos
$salvar = $pdo->prepare('INSERT INTO produtos_vendidos (modelo, estado_produto, valor_compra, valor_venda, lucro, imei, numero_serie, cliente, vendedor, data) VALUES (:modelo, :estado_produto, :valor_compra, :valor_venda, :lucro, :imei, :numero_serie, :cliente, :vendedor, :data)');
$salvar->bindValue(':modelo', $produtos->modelo);
$salvar->bindValue(':estado_produto', $produtos->estado_produto);
$salvar->bindValue(':valor_compra', $produtos->valor_compra);
$salvar->bindValue(':valor_venda', $produtos->valor_venda);
$salvar->bindValue(':lucro', $lucro);
$salvar->bindValue(':imei', $produtos->imei);
$salvar->bindValue(':numero_serie', $produtos->numero_serie);
$salvar->bindValue(':cliente', $_POST['cliente']);
$salvar->bindValue(':vendedor', $_POST['vendedor']);
$salvar->bindValue(':data', $data);
$result = $salvar->execute();

// Deleta o produto
$deletar = $pdo->prepare('DELETE FROM produtos WHERE id = :id');
$deletar->bindValue(':id', $_POST['id']);
$deletar->execute();

if ($produtos && $result && $deletar) {
  header('Location: ../index.php');
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro ao salvar no Banco de Dados!</div>';
  header('Location: ../nova_venda.php');
}

?>
