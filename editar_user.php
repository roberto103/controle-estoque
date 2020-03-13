<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/menu.php'; ?>

<?php

$usuarios = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
$usuarios->bindvalue(':id', $_GET['id']);
$usuarios->execute();

$usuarios = $usuarios->fetch(PDO::FETCH_OBJ);

 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Usuário</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="/controle-estoque">Início</a>
              </li>
              <li class="breadcrumb-item active">Editar Usuário</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="container-fluid">

      <form action="core/atualizar_usuarios.php" method="POST">
        <div class="col-sm-8">

          <input type="hidden" name="id" value="<?php echo $usuarios->id; ?>">

          <div class="row mb-3">
            <label for="nome_usuario">Nome</label>
            <input id="nome_usuario" name="nome" type="text" class="form-control" placeholder="Nome do usuário" value="<?php echo $usuarios->nome; ?>" required>
          </div>

          <div class="row mb-3">
            <label for="email_usuario">Email</label>
            <input id="email_usuario" name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $usuarios->email; ?>" required>
          </div>

          <div class="row mb-3">
            <label for="senha_usuario">Senha</label>
            <input id="senha_usuario" name="senha" type="password" class="form-control" placeholder="Senha de login" value="<?php echo $usuarios->senha; ?>" required>
          </div>

          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label>Permissão do usuário</label>
                <select name="permissao" class="form-control">
                  <option value="Admin">Administrador</option>
                  <option value="Funcionario">Funcionário</option>
                </select>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Salvar alterações</button>
        </div>
      </form>

      <div class="col-sm-4"></div>
    </div>

  </div>

<?php include_once 'includes/footer.php'; ?>
