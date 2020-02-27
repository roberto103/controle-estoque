<?php

require_once 'conexao.php';

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
  echo "<script>alert('Erro ao salvar no Banco de Dados.')</script>";
  header('Location: ../usuarios.php');
}
?>
