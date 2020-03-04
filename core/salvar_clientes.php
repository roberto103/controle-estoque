<?php

require_once 'conexao.php';
session_start();

$nome = $_POST['nome_cliente'];
$data_nascimento = $_POST['data_nascimento'];
$inicio_fidelidade = $_POST['inicio_fidelidade'];
$cidade = $_POST['cidade_cliente'];
$bairro = $_POST['bairro_cliente'];
$rua = $_POST['logradouro_cliente'];

$salvar = $pdo->prepare('INSERT INTO clientes (nome, data_nascimento, inicio_fidelidade, cidade, bairro, rua) VALUES (:nome, :data_nascimento, :inicio_fidelidade, :cidade, :bairro, :rua)');
$salvar->bindValue(':nome', $nome);
$salvar->bindValue(':data_nascimento', $data_nascimento);
$salvar->bindValue(':inicio_fidelidade', $inicio_fidelidade);
$salvar->bindValue(':cidade', $cidade);
$salvar->bindValue(':bairro', $bairro);
$salvar->bindValue(':rua', $rua);
$result = $salvar->execute();

if ($result) {
  header("Location: ../clientes.php");
}else{
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro ao salvar no Banco de Dados!</div>';
  header("Location: ../clientes.php");
}
?>
