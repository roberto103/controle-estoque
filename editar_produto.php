<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

$produto = $pdo->prepare('SELECT * FROM produtos WHERE id = :id');
$produto->bindvalue(':id', $_GET['id']);
$produto->execute();

$produto = $produto->fetch(PDO::FETCH_OBJ);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-sm-6">
          <h1>Editar produto</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="<?php echo $_SERVER['HTTP_HOST']; ?>">Início</a>
            </li>
            <li class="breadcrumb-item active">Editar produto</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container-fluid">

    <form action="core/atualizar_produto.php" method="POST">
      <div class="col-sm-8">

        <input type="hidden" name="id" value="<?php echo $produto->id; ?>">

        <div class="row mb-3">
          <div class="col">
            <label for="modelo_celular">Modelo</label>
            <input id="modelo" name="modelo" type="text" class="form-control" placeholder="Modelo do produto" value="<?php echo $produto->modelo; ?>" required>
          </div>

          <div class="col">
            <label for="data_compra">Data da compra</label>
            <input id="data_compra" name="data_compra" type="date" class="form-control" placeholder="Data da compra do produto" value="<?php echo $produto->data_compra; ?>" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="valor_compra">Preço de compra</label>
            <input id="valor_compra" name="valor_compra" type="text" class="form-control money" placeholder="Preço de compra" value="<?php echo $produto->valor_compra; ?>" required>
          </div>
          <div class="col">
            <label for="valor_venda">Preço de venda</label>
            <input id="valor_venda" name="valor_venda" type="text" class="form-control money" placeholder="Preço de venda" value="<?php echo $produto->valor_venda; ?>" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="imei">IMEI</label>
            <input id="imei" name="imei" type="text" class="form-control" placeholder="IMEI" value="<?php echo $produto->imei; ?>" required>
          </div>
          <div class="col">
            <label for="numero_serie">Número de Série</label>
            <input id="numero_serie" name="numero_serie" type="text" class="form-control" placeholder="Número de Série" value="<?php echo $produto->numero_serie; ?>" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <div class="form-group">
              <label>Estado</label>
              <select name="estado_produto" class="form-control">
                <option value="Novo">Novo</option>
                <option value="Seminovo">Seminovo</option>
                <option value="Usado">Usado</option>
              </select>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar alterações</button>
      </div>
    </form>

    <div class="col-sm-4"></div>

  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
