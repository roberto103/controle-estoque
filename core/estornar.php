<?php


require_once 'conexao.php';


session_start();
//deletar
$sql = $pdo->prepare('DELETE FROM produtos WHERE id = :id');
$sql->bindValue(':id', $_GET['id']);
$sql->execute();

//adicionar


?>
