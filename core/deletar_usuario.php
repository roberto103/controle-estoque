<?php

require_once 'conexao.php';

session_start();

$sql = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
$sql->bindValue(':id', $_GET['id']);
$sql->execute();

if ($sql) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Usuário deletado com sucesso!</div>';
  header('Location: ../usuarios.php');

}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">O usuário não foi deletado com sucesso!</div>';
  header('Location: ../usuarios.php');

}

?>
