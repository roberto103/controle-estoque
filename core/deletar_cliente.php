<?php

require_once 'conexao.php';

session_start();

$sql = $pdo->prepare('DELETE FROM clientes WHERE id = :id');
$sql->bindValue(':id', $_GET['id']);
$sql->execute();

if ($sql) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Cliente deletado com sucesso!</div>';
  header('Location: ../clientes.php');

}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">O cliente não foi deletado com sucesso!</div>';
  header('Location: ../clientes.php');

}

?>
