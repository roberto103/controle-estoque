<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

require_once 'core/conexao.php';

$sql = $pdo->prepare('SELECT * FROM produtos_vendidos');
$sql->execute();
$registros = $sql->fetchAll(PDO::FETCH_OBJ);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark" style="display: inline-block;">Histórico de Vendas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="<?php echo $_SERVER['HTTP_HOST']; ?>">Início</a>
            </li>
            <li class="breadcrumb-item active">Histórico de Vendas</li>
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

              <table id="example2" class="table table-bordered table-hover table-responsive">
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
                    <th>Data da venda</th>
                    <th>Vendedor</th>
                    <th>Cliente</th>
                    <th>Estornar</th>
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
                      <td><?php echo dataTela($produtos->data_venda); ?></td>
                      <td><?php echo $produtos->vendedor; ?></td>
                      <td><?php echo $produtos->cliente; ?></td>
                      <td class="text-center">
                        <a href="core/estornar.php?id=<?php echo $produtos->id; ?>" title="Estornar" style="font-size: 20px;">
                          <i class="fas fa-retweet"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>

              </table>
              <span class="text-success">Lucro: R$ 100,00</span>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<?php include_once 'includes/footer.php'; ?>
