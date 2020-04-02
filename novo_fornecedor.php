<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Cadastrar novo fornecedor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="<?php echo $_SERVER['HTTP_HOST']; ?>">Início</a>
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
    <form action="core/salvar_fornecedor.php" method="POST">
      <div class="col-sm-8">
        <div class="row mb-3">
          <label for="nome_fornecedor">Nome</label>
          <input id="nome_fornecedor" name="nome" type="name" class="form-control" placeholder="Nome do fornecedor" required>
        </div>

        <div class="row mb-3">
          <label for="contato_fornecedor">Contato</label>
          <input id="contato_fornecedor" name="contato" type="name" class="form-control phone" placeholder="(00) 0 0000-0000" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar Fornecedor</button>
      </div>
    </form>

    <div class="col-sm-4"></div>

  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
