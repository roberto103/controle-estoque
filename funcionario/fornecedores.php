<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

require_once 'core/conexao.php';

$sql = $pdo->prepare('SELECT * FROM fornecedores');
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
          <h1 class="m-0 text-dark" style="display: inline-block;">Fornecedores</h1>

          <a href="novo_fornecedor.php" class="btn btn-primary" style="margin-left: 10px; margin-top: -10px;">Novo Fornecedor</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="/controle-estoque">Início</a>
            </li>
            <li class="breadcrumb-item active">Fornecedores</li>
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
                    <th>Telefone</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($registros as $fornecedores): ?>
                    <tr>
                      <td><?php echo $fornecedores->id; ?></td>
                      <td><?php echo $fornecedores->nome; ?></td>
                      <td><?php echo $fornecedores->contato; ?></td>
                      <td class="text-center">
                        <a href="editar_fornecedor.php?id=<?php echo $fornecedores->id; ?>" title="Editar" style="font-size: 20px;">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="core/deletar_fornecedor.php?id=<?php echo $fornecedores->id; ?>" title="Excluir" style="font-size: 20px; color: #ff0a21;">
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
