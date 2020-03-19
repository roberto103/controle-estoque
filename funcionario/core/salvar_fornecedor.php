<?php

require_once 'conexao.php';
session_start();

$nome = $_POST['nome'];
$contato = $_POST['contato'];

$salvar = $pdo->prepare('INSERT INTO fornecedores (nome, contato) VALUES (:nome, :contato)');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':contato', $contato);
$result = $salvar->execute();

if ($result) {
  header('Location: ../fornecedores.php');
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro ao salvar no Banco de Dados!</div>';
  header('Location: ../fornecedores.php');
}

?>
