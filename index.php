<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

// Quantidade de clientes cadastrados
$clientes = $pdo->prepare('SELECT * FROM clientes');
$clientes->execute();
$linhas = $clientes->rowCount();

// Quantidade de produtos Vendidos
$vendas = $pdo->prepare('SELECT SUM(lucro) AS lucro FROM produtos_vendidos');
$vendas->execute();
$produtos_vendidos = $vendas->rowCount();
$vendidos = $vendas->fetchAll(PDO::FETCH_OBJ);

// Lucro dos produtos Vendidos
foreach ($vendidos as $vendidos);
$lucro = $vendidos->lucro;

// Quantidade de usuários cadastrados
$user = $pdo->prepare('SELECT * FROM usuarios');
$user->execute();
$usuarios = $user->rowCount();

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="/">Início</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $produtos_vendidos; ?></h3>

              <p>Vendas</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>R$ <?php echo $lucro; ?><sup style="font-size: 20px"></sup></h3>

              <p>de lucro</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $linhas; ?></h3>

              <p>Clientes cadastrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $usuarios; ?></h3>

              <p>Usuários</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">

      </div>

    </div>
  </section>
</div>

<?php include_once 'includes/footer.php'; ?>
