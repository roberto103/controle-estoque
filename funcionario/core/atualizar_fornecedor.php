<?php

require_once 'conexao.php';
session_start();

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$id = $_POST['id'];

$salvar = $pdo->prepare('UPDATE fornecedores SET nome = :nome, contato = :contato WHERE id = :id');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':contato', $contato);
$salvar->bindValue(':id', $id);
$result = $salvar->execute();

if ($result) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Fornecedor atualizado com sucesso!</div>';
  header('Location: ../fornecedores.php');
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Falha ao tentar atualizar o fornecedor!</div>';
  header('Location: ../fornecedores.php');
}

?>
