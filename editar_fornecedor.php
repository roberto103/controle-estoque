<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

$fornecedores = $pdo->prepare('SELECT * FROM fornecedores WHERE id = :id ORDER BY id ASC');
$fornecedores->bindvalue(':id',$_GET['id']);
$fornecedores->execute();

$fornecedores = $fornecedores->fetch(PDO::FETCH_OBJ);

 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Editar fornecedor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="/">Início</a>
            </li>
            <li class="breadcrumb-item active">Cadastrar novo fornecedor</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <div class="container-fluid">
    <form action="" method="POST">
      <div class="col-sm-8">
        <div class="row mb-3" style="margin-left:0.1%;">
          <label for="nome_fornecedor">Nome</label>
          <input id="nome_fornecedor" name="nome_fornecedor" type="name" class="form-control" placeholder="Nome do fornecedor" value="<?php echo $fornecedores->nome; ?>">
        </div>

        <div class="row mb-3" style="margin-left:0.1%;">
          <label for="contato_fornecedor">Contato</label>
          <input id="contato_fornecedor" name="contato_fornecedor" type="name" class="form-control" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="(00) 0 0000-0000" value="<?php echo $fornecedores->telefone; ?>">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>

    <div class="col-sm-4"></div>

  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
