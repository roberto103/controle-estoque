<?php

require_once 'conexao.php';
session_start();

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$inicio_fidelidade = $_POST['inicio_fidelidade'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];

$salvar = $pdo->prepare('UPDATE clientes SET nome = :nome, data_nascimento = :data_nascimento, inicio_fidelidade = :inicio_fidelidade, cidade = :cidade, bairro = :bairro, rua = :rua WHERE id = :id');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':data_nascimento', $data_nascimento);
$salvar->bindValue(':inicio_fidelidade', $inicio_fidelidade);
$salvar->bindValue(':cidade', $cidade);
$salvar->bindValue(':bairro', $bairro);
$salvar->bindValue(':rua', $rua);
$salvar->bindValue(':id', $id);
$result = $salvar->execute();

if ($result) {
  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Cliente atualizado com sucesso!</div>';
  header('Location: ../clientes.php');
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Falha ao tentar atualizar o cliente!</div>';
  header('Location: ../clientes.php');
}

?>
