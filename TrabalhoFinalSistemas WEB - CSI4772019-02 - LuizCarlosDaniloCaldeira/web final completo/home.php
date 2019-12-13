<?php require_once ('./db/validador.php') ?>

<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VipDesk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">

  </head>
  <body>

    <!-- cabeçalho da página -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php"><img src="./imagens/logo.png" width="90" height="60" class="d-inline-block align-top" alt="">App Help Desk</a>

      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="responsaveis.php">Responsáveis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastroSetores.php">Novo setor</a>
        </li>
      <!-- botão abrir chamado -->
        <li class="nav-item">
          <a class="nav-link" href="cadastroFuncionarios.php">Novo funcionário</a>
            <!-- botao para logar -->
        </li>
      <!-- botão abrir chamado -->
        <li class="nav-item">
          <a class="nav-link" href="abrirChamado.php">Abrir chamados</a>
        </li>
      <!-- botão de sair... fazer logoff -->
        <li class="nav-item">
          <a class="nav-link" href="./db/logoff.php">Logoff</a>
        </li>
      </ul>
    </nav>

    <!-- corpo do trabalho -->
    <div class="container">
      <div class="row">
        <div class="card-home">
          <div class="card">

            <div class="card-header">
              Menu
            </div>

            <!-- div dos botões de ferramentas do sistema -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <table class="table table-borderless table-light table-hover">
                    <thead>
                      <tr>
                        <th>Tarefa</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Alterar status</th>
                        <th>Apagar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include './db/chamados/readAll.php'; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
