<?php

require_once 'conexao.php';
session_start();

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$permissao = $_POST['permissao'];

$salvar = $pdo->prepare('UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, permissao = :permissao WHERE id = :id');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':email', $email);
$salvar->bindValue(':senha', $senha);
$salvar->bindValue(':permissao', $permissao);
$salvar->bindValue(':id', $id);
$result = $salvar->execute();

if ($result) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Usuário atualizado com sucesso!</div>';
  header('Location: ../usuarios.php');
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Falha ao tentar atualizar o usuário!</div>';
  header('Location: ../usuarios.php');
}

?>
