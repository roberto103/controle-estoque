<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

$fornecedores = $pdo->prepare('SELECT * FROM fornecedores WHERE id = :id');
$fornecedores->bindvalue(':id', $_GET['id']);
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
          <h1>Editar Fornecedor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="/controle-estoque">Início</a>
            </li>
            <li class="breadcrumb-item active">Editar Fornecedor</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <div class="container-fluid">
    <form action="core/atualizar_fornecedor.php" method="POST">
      <div class="col-sm-8">

        <input type="hidden" name="id" value="<?php echo $fornecedores->id; ?>">

        <div class="row mb-3">
          <label for="nome_fornecedor">Nome</label>
          <input id="nome_fornecedor" name="nome" type="name" class="form-control" placeholder="Nome do fornecedor" value="<?php echo $fornecedores->nome; ?>">
        </div>

        <div class="row mb-3">
          <label for="contato_fornecedor">Contato</label>
          <input id="contato_fornecedor" name="contato" type="name" class="form-control phone" placeholder="(00) 0 0000-0000" value="<?php echo $fornecedores->contato; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Salvar alterações</button>
      </div>
    </form>

    <div class="col-sm-4"></div>

  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
