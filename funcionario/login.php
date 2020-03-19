<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - Controle de Estoque</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <b>Controle de</b> Estoque
    </div>
    <!-- /.login-logo -->

    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Faça login para iniciar sua sessão</p>

        <form action="core/Login.php" method="post">

          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- /.login-box -->

  <p class="mb-0">
    Desenvolvido por <a href="https://www.instagram.com/i9soft/" class="text-center">i9 Soft.</a>
  </p>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

</body>
</html>
