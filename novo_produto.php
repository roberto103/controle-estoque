<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-sm-6">
          <h1>Cadastrar novo produto</h1>
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

    <form action="" method="POST">

      <div class="col-sm-8">
        <div class="row mb-3" style="margin-left:0.1%;">
          <label for="modelo_celular">Modelo</label>
          <input id="modelo_celular" name="modelo_celular" type="text" class="form-control" placeholder="Modelo do produto" required>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="preco_compra">Preço de compra</label>
            <input id="preco_compra" name="preco_compra" type="text" class="form-control money" placeholder="Preço de compra" required>
          </div>
          <div class="col">
            <label for="preco_venda">Preço de venda</label>
            <input id="preco_venda" name="preco_venda" type="text" class="form-control money" placeholder="Preço de venda" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="fabricante">Fabricante</label>
            <input id="fabricante" name="fabricante" type="text" class="form-control" placeholder="Fabricante do produto" required>
          </div>
          <div class="col">
            <label for="imac">IMAC</label>
            <input id="imac" name="imac" type="text" class="form-control" placeholder="IMAC" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <div class="form-group">
              <label>Estado</label>
              <select class="form-control">
                <option>Novo</option>
                <option>Seminovo</option>
                <option>Usado</option>
              </select>
            </div>
          </div>

          <div class="col">
            <label for="quantidade_produto">Quantidade</label>
            <input id="quantidade_produto" name="quantidade_produto" type="number" class="form-control" placeholder="Quantidade do produto" required>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar produto</button>
      </div>
    </form>

    <div class="col-sm-4"></div>

  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
