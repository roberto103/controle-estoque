<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$id = $_POST['id'];

$salvar = $pdo->prepare('UPDATE fornecedores SET nome = :nome, contato = :contato WHERE id = :id');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':contato', $contato);
$salvar->bindValue(':id', $id);
$result = $salvar->execute();

if ($result) {
  header('Location: ../fornecedores.php');
}else{
  echo "<script>alert('Erro ao salvar no Banco de Dados.')</script>";
  header('Location: ../fornecedores.php');
}

?>
