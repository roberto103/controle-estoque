<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$contato = $_POST['contato'];

$salvar = $pdo->prepare('INSERT INTO fornecedores (nome, contato) VALUES (:nome, :contato)');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':contato', $contato);
$result = $salvar->execute();

if ($result) {
  header('Location: ../fornecedores.php');
}else{
  echo "<script>alert('Erro ao salvar no Banco de Dados.')</script>";
  header('Location: ../fornecedores.php');
}

?>
