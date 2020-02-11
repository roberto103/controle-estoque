<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
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
      <form class="" action="index.html" method="post">
        <div class="col-sm-8">
          <div class="row" style="margin-left:0.1%;">
            <label for="nome_cliente">Modelo</label>
            <input id="nome_cliente" name="nome_cliente" type="name" value="" class="form-control" placeholder="Modelo do produto">
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="">Preço de compra</label>
              <input id="data_nascimento" name="data_nascimento" type="number" class="form-control" placeholder="Preço de compra">
            </div>
            <div class="col">
              <label for="data_cliente">Preço de venda</label>
              <input id="data_cliente" name="data_cliente" type="number" class="form-control" placeholder="Preço de venda">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="cidade_cliente">Fabricante</label>
              <input id="cidade_cliente" name="cidade_cliente" type="text" class="form-control" placeholder="Fabricante do produto">
            </div>
            <div class="col">
              <label for="bairro_cliente">IMAC</label>
              <input id="bairro_cliente" name="bairro_cliente" type="text" class="form-control" placeholder="IMAC">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="estado_produto">Estado</label>
              <input id="estado_produto" name="estado_produto" type="text" class="form-control" placeholder="Novo, semi-novo ...">
            </div>
            <div class="col">
              <label for="quantidade_produto">Quantidade</label>
              <input id="quantidade_produto" name="quantidade_produto" type="text" class="form-control" placeholder="Quantidade do produto">
            </div>
          </div>
          <br>
          <br>
          <button type="submit" class="btn btn-primary">Cadastrar produto</button>
        </div>
      </form>
      <div class="col-sm-4">

      </div>
    </div>

  </div>

<?php include_once 'includes/footer.php'; ?>
