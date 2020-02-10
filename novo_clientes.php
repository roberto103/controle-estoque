<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar novo cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="/">Início</a>
              </li>
              <li class="breadcrumb-item active">Cadastrar novo cliente</li>
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
            <label for="nome_cliente">Nome</label>
            <input id="nome_cliente" name="nome_cliente" type="name" value="" class="form-control">
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="">Data de nascimento</label>
              <input id="data_nascimento" name="data_nascimento" type="date" class="form-control" placeholder="Data de nascimento">
            </div>
            <div class="col">
              <label for="data_cliente">Inicio da fidelidade</label>
              <input id="data_cliente" name="data_cliente" type="date" class="form-control" placeholder="Inicio da fidelidade">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="cidade_cliente">Cidade</label>
              <input id="cidade_cliente" name="cidade_cliente" type="text" class="form-control" placeholder="Cidade">
            </div>
            <div class="col">
              <label for="bairro_cliente">Bairro</label>
              <input id="bairro_cliente" name="bairro_cliente" type="text" class="form-control" placeholder="Bairro">
            </div>
          </div>
          <br>
          <div class="row" style="margin-left:0.1%;">
            <label for="logradouro_cliente">Logradouro</label>
            <input id="logradouro_cliente" name="logradouro_cliente" type="text" value="" class="form-control">
          </div>
        </div>
      </form>
      <div class="col-sm-4">

      </div>
    </div>

  </div>

<?php include_once 'includes/footer.php'; ?>