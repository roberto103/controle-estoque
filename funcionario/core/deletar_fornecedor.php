<?php

require_once 'conexao.php';

session_start();

$sql = $pdo->prepare('DELETE FROM fornecedores WHERE id = :id');
$sql->bindValue(':id', $_GET['id']);
$sql->execute();

if ($sql) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Fornecedor deletado com sucesso!</div>';
  header('Location: ../fornecedores.php');

}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">O fornecedor não foi deletado com sucesso!</div>';
  header('Location: ../fornecedores.php');

}

?>
