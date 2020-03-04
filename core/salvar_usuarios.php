<?php

require_once 'conexao.php';
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$permissao = $_POST['permissao'];

$salvar = $pdo->prepare('INSERT INTO usuarios (nome, email, senha, permissao) VALUES (:nome, :email, :senha, :permissao)');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':email', $email);
$salvar->bindValue(':senha', $senha);
$salvar->bindValue(':permissao', $permissao);
$result = $salvar->execute();

if ($result) {
  header('Location: ../usuarios.php');
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro ao salvar no Banco de Dados!</div>';
  header('Location: ../usuarios.php');
}
?>
