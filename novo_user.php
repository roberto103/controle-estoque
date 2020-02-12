<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar novo usuário</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="/">Início</a>
              </li>
              <li class="breadcrumb-item active">Cadastrar novo usuário</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="container-fluid">

      <form action="" method="POST">
        <div class="col-sm-8">
          <div class="row mb-3" style="margin-left:0.1%;">
            <label for="nome_usuario">Nome</label>
            <input id="nome_usuario" name="nome_usuario" type="text" class="form-control" required>
          </div>

          <div class="row mb-3" style="margin-left:0.1%;">
            <label for="email_usuario">Email</label>
            <input id="email_usuario" name="email_usuario" type="email" class="form-control" required>
          </div>

          <div class="row mb-3" style="margin-left:0.1%;">
            <label for="senha_usuario">Senha</label>
            <input id="senha_usuario" name="senha_usuario" type="password" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar usuário</button>
        </div>
      </form>

      <div class="col-sm-4"></div>
    </div>

  </div>

<?php include_once 'includes/footer.php'; ?>
