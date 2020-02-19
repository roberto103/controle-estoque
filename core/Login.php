<?php

  require_once 'Sessao.php';

  if (Sessao::login($_POST['email'],$_POST['senha']))
  {

    header('Location: ../index.php');
    echo 1;

  } else {

    header('Location: ../login.php');
    echo 0;

  }

?>
