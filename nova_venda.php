<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

require_once 'core/conexao.php';
require_once 'core/Sessao.php';

$sql = $pdo->prepare('SELECT * FROM produtos');
$sql->execute();
$registros = $sql->fetchAll(PDO::FETCH_OBJ);

$buscar = $pdo->prepare('SELECT * FROM clientes');
$buscar->execute();
$clientes = $buscar->fetchAll(PDO::FETCH_OBJ);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark" style="display: inline-block;">Realizar Venda</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="<?php echo $_SERVER['HTTP_HOST']; ?>">Início</a>
            </li>
            <li class="breadcrumb-item active">Nova Venda</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-12">

          <?php if (isset($_SESSION['msg'])) {
  					echo $_SESSION['msg'];
  					unset($_SESSION['msg']);
  				} ?>

          <div class="card">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Estado</th>
                    <th>Valor de compra</th>
                    <th>Valor de venda</th>
                    <th>IMEI</th>
                    <th>Nº de Série</th>
                    <th>Data da compra</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($registros as $produtos): ?>
                    <tr>
                      <td><?php echo $produtos->id; ?></td>
                      <td><?php echo $produtos->modelo; ?></td>
                      <td><?php echo $produtos->estado_produto; ?></td>
                      <td>R$ <?php echo decimalTela($produtos->valor_compra); ?></td>
                      <td>R$ <?php echo decimalTela($produtos->valor_venda); ?></td>
                      <td><?php echo $produtos->imei; ?></td>
                      <td><?php echo $produtos->numero_serie; ?></td>
                      <td><?php echo dataTela($produtos->data_compra); ?></td>
                      <td class="text-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal_vender" data-id="<?php echo $produtos->id; ?>">Vender</button>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<div class="modal" id="modal_vender" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar venda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="core/salvar_venda.php" method="post">

          <input type="hidden" id="id" name="id">
          <input type="hidden" name="vendedor" value="<?php echo $_SESSION['nome']; ?>">

          <div class="row mb-5 mt-4">
            <div class="col">
              <label>Selecione um cliente</label>
              <select name="id_cliente" class="form-control">
                <option disabled>Selecione um cliente</option>
                <?php foreach ($clientes as $cliente): ?>
                  <option value="<?php echo $cliente->id; ?>"><?php echo $cliente->nome; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <hr>
          <button type="submit" class="btn btn-success float-right">Confirmar Venda</button>

        </form>
      </div>

    </div>
  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
