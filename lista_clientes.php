<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

require_once 'core/conexao.php';

$sql = $pdo->prepare('SELECT * FROM clientes');
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
          <h1 class="m-0 text-dark" style="display: inline-block;">Clientes</h1>

          <a href="novo_clientes.php" class="btn btn-primary" style="margin-left: 10px; margin-top: -10px;">Novo Cliente</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="<?php echo $_SERVER['HTTP_HOST']; ?>">Início</a>
            </li>
            <li class="breadcrumb-item active">Clientes</li>
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
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de nascimento</th>
                    <th>Inicio da fidelidade</th>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Rua</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($registros as $clientes): ?>
                    <tr>
                      <td><?php echo $clientes->id; ?></td>
                      <td><?php echo $clientes->nome; ?></td>
                      <td><?php echo $clientes->cpf; ?></td>
                      <td><?php echo dataTela($clientes->data_nascimento); ?></td>
                      <td><?php echo dataTela($clientes->inicio_fidelidade); ?></td>
                      <td><?php echo $clientes->cidade; ?></td>
                      <td><?php echo $clientes->bairro; ?></td>
                      <td><?php echo $clientes->rua; ?></td>
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
