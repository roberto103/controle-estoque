<?php

require_once 'conexao.php';

$handler = $pdo->prepare('SELECT * FROM usuarios WHERE email=:email AND senha=:senha');

$handler->bindValue(':email', $_POST['email']);
$handler->bindValue(':senha', $_POST['senha']);
$handler->execute();
$administrador = $handler->fetch(PDO::FETCH_OBJ);

$logado = $handler->rowCount();

if ($logado) {
  // Nivel de acesso
  switch ($administrador->permissao) {
    case 'Admin':
      session_start();
      $_SESSION['email_admin'] = $administrador->email;
      $_SESSION['nome'] = $administrador->nome;
      $_SESSION['permissao'] = $administrador->permissao;

      header('Location: ../index.php');
    break;

    case 'Funcionário':
      session_start();
      $_SESSION['email_funcionario'] = $administrador->email;
      $_SESSION['nome'] = $administrador->nome;
      $_SESSION['permissao'] = $administrador->permissao;

      header('Location: ../index.php');
    break;

    default:
    // code...
    break;
  }

}
