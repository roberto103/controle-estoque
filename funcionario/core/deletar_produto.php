<?php

require_once 'conexao.php';

session_start();

$sql = $pdo->prepare('DELETE FROM produtos WHERE id = :id');
$sql->bindValue(':id', $_GET['id']);
$sql->execute();

if ($sql) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Produto deletado com sucesso!</div>';
  header('Location: ../produtos.php');

}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">O produto não foi deletado com sucesso!</div>';
  header('Location: ../produtos.php');

}

?>
