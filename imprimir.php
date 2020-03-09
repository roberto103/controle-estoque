<?php

require_once 'core/conexao.php';
require_once 'core/Sessao.php';
require_once 'core/util.php';

if (!Sessao::estaLogado()) {
  header('Location: login.php');
}

$sql = $pdo->prepare('SELECT * FROM produtos_vendidos WHERE id = :id');
$sql->bindvalue(':id', $_GET['id']);
$sql->execute();
$registro = $sql->fetchAll(PDO::FETCH_OBJ);

foreach ($registro as $registros);

?>

<script type="text/javascript">
window.print();
</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Comprovante de Venda - Controle de Estoque</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style media="screen">
  #hr {
    width: 100%;
    background-color: #fff;
    border-top: 2px dashed #8c8b8b;
  }
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <section class="content">

      <div class="container">
        <div class="row">

          <!-- parte 1 -->
          <div class="col-sm-12 pt-5">

            <!-- logo -->
            <div class="row mb-4">
              <div class="col">
                <img src="img/logo.png" alt="BR iPhones" width="110px">
              </div>
            </div>

            <!-- informações -->
            <div class="row">
              <div class="col" style="margin-bottom: 35px;">
                <h5 class="d-block">Cliente: <?php echo $registros->cliente; ?></h5>
                <h5 class="d-block">Vendedor: <?php echo $registros->vendedor; ?></h5>
              </div>

              <div class="col text-right" style="margin-bottom: 35px;">
                <h5 class="d-block">Data: <?php echo dataHoraTela($registros->data); ?></h5>
                <h5 class="d-block">ID da venda: <?php echo $registros->id; ?></h5>
              </div>
            </div>

            <!-- produtos -->
            <table class="table table-bordered mb-5">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Estado</th>
                  <th>Valor</th>
                  <th>Número de Série</th>
                  <th>IMEI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $registros->modelo; ?></td>
                  <td><?php echo $registros->estado_produto; ?></td>
                  <td>R$ <?php echo decimalTela($registros->valor_venda); ?></td>
                  <td><?php echo $registros->numero_serie; ?></td>
                  <td><?php echo $registros->imei; ?></td>
                </tr>
              </tbody>
            </table>

            <div class="text-center mb-5">
              <span class="d-block mb-4">Assinatura do comprador:</span>
              <span>_________________________________________________</span>
            </div>
          </div>

          <div id="hr"></div>

          <!-- =========================================================================================== -->
          <!-- parte 2 -->
          <div class="col-sm-12 pt-5">

            <!-- logo -->
            <div class="row mb-4">
              <div class="col">
                <img src="img/logo.png" alt="BR iPhones" width="110px">
              </div>
            </div>

            <!-- informações -->
            <div class="row">
              <div class="col" style="margin-bottom: 35px;">
                <h5 class="d-block">Cliente: <?php echo $registros->cliente; ?></h5>
                <h5 class="d-block">Vendedor: <?php echo $registros->vendedor; ?></h5>
              </div>

              <div class="col text-right" style="margin-bottom: 35px;">
                <h5 class="d-block">Data: <?php echo dataHoraTela($registros->data); ?></h5>
                <h5 class="d-block">ID da venda: <?php echo $registros->id; ?></h5>
              </div>
            </div>

            <!-- produtos -->
            <table class="table table-bordered mb-5">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Estado</th>
                  <th>Valor</th>
                  <th>Número de Série</th>
                  <th>IMEI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $registros->modelo; ?></td>
                  <td><?php echo $registros->estado_produto; ?></td>
                  <td>R$ <?php echo decimalTela($registros->valor_venda); ?></td>
                  <td><?php echo $registros->numero_serie; ?></td>
                  <td><?php echo $registros->imei; ?></td>
                </tr>
              </tbody>
            </table>

            <div class="text-center">
              <span class="d-block mb-4">Assinatura do comprador:</span>
              <span>_________________________________________________</span>
            </div>
          </div>

        </div>
      </div>

    </section>
  </div>
</body>
