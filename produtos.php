<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

require_once 'core/conexao.php';

$sql = $pdo->prepare('SELECT * FROM produtos');
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
          <h1 class="m-0 text-dark" style="display: inline-block;">Produtos</h1>

          <a href="novo_produto.php" class="btn btn-primary" style="margin-left: 10px; margin-top: -10px;">Novo Produto</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="/">Início</a>
            </li>
            <li class="breadcrumb-item active">Produtos</li>
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
                      <td class="text-center">
                        <a href="editar_produto.php?id=<?php echo $produtos->id; ?>" title="Editar" style="font-size: 20px;">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="core/deletar_produto.php?id=<?php echo $produtos->id; ?>" title="Excluir" style="font-size: 20px; color: #ff0a21;">
                          <i class="fas fa-trash"></i>
                        </a>
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

<?php include_once 'includes/footer.php'; ?>
