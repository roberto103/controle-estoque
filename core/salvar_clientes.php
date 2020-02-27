<?php

require_once 'conexao.php';

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
  echo "<script>alert('Erro ao salvar no Banco de Dados.')</script>";
  header("Location: ../clientes.php");
}
?>
