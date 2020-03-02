<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

$produto = $pdo->prepare('SELECT * FROM produtos WHERE id = :id ORDER BY id ASC');
$produto->bindvalue(':id',$_GET['id']);
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
              <a href="/">Início</a>
            </li>
            <li class="breadcrumb-item active">Cadastrar novo produto</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <div class="container-fluid">

    <form action="core/salvar_produto.php" method="POST">
      <div class="col-sm-8">
        <div class="row mb-3" style="margin-left:0.1%;">
          <label for="modelo_celular">Modelo</label>
          <input id="modelo" name="modelo" type="text" class="form-control" placeholder="Modelo do produto" value="<?php echo $produto->modelo; ?>" required>
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
                <option value="novo">Novo</option>
                <option value="seminovo">Seminovo</option>
                <option value="usado">Usado</option>
              </select>
            </div>
          </div>

          <div class="col">
            <label for="quantidade_produto">Quantidade</label>
            <input id="quantidade_produto" name="quantidade_produto" type="number" class="form-control" placeholder="Quantidade do produto" value="<?php echo $produto->quantidade; ?>" required>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>

    <div class="col-sm-4"></div>

  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
