<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

$clientes = $pdo->prepare('SELECT * FROM clientes WHERE id = :id ORDER BY id ASC');
$clientes->bindvalue(':id', $_GET['id']);
$clientes->execute();

$clientes = $clientes->fetch(PDO::FETCH_OBJ);

 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Editar cliente</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="/">Início</a>
            </li>
            <li class="breadcrumb-item active">Editar cliente</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <div class="container-fluid">
    <form action="core/salvar_clientes.php" method="POST">
      <div class="col-sm-8">
        <div class="row mb-3" style="margin-left:0.1%;">
          <label for="nome_cliente">Nome</label>
          <input id="nome_cliente" name="nome_cliente" type="name" class="form-control" placeholder="Nome do cliente" value="<?php echo $clientes->nome; ?>" required>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="data_nascimento">Data de nascimento</label>
            <input id="data_nascimento" name="data_nascimento" type="date" class="form-control" placeholder="Data de nascimento" value="<?php echo $clientes->data_nascimento; ?>" required>
          </div>
          <div class="col">
            <label for="data_cliente">Inicio da fidelidade</label>
            <input id="data_cliente" name="inicio_fidelidade" type="date" class="form-control" placeholder="Inicio da fidelidade" value="<?php echo $clientes->inicio_fidelidade; ?>" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="cidade_cliente">Cidade</label>
            <input id="cidade_cliente" name="cidade_cliente" type="text" class="form-control" placeholder="Cidade" value="<?php echo $clientes->cidade; ?>" required>
          </div>
          <div class="col">
            <label for="bairro_cliente">Bairro</label>
            <input id="bairro_cliente" name="bairro_cliente" type="text" class="form-control" placeholder="Bairro" value="<?php echo $clientes->bairro; ?>" required>
          </div>
        </div>

        <div class="row mb-3" style="margin-left:0.1%;">
          <label for="logradouro_cliente">Logradouro</label>
          <input id="logradouro_cliente" name="logradouro_cliente" type="text" class="form-control" placeholder="Rua do cliente" value="<?php echo $clientes->rua; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar cliente</button>
      </div>
    </form>

    <div class="col-sm-4"></div>

  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
