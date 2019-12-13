<?php require_once ('./db/validador.php') ?>

<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VipDesk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>

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

    <!--  -->
    <!-- corpo do trabalho -->
    <div class="container">
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Cadastro de novos setores! Informe os dados abaixo:
            </div>

            <br>

            <div class="card-body">
              <!-- formulário de cadastro -->

              <div class="row">
                <div class="col-8">
                  <form action="./db/setores/create.php" method="post">
                    <!-- email -->
                    <div class="form-group">
                      <input name="nome" class="form-control"required autofocus placeholder placeholder="Nome do novo setor">
                    </div>

                    <div class="row mt-5">
                      <!-- botao para logar -->

                      <div class="col-4">
                        <a href="home.php"class="btn btn-lg btn-warning btn-block">Voltar</a>
                      </div>

                      <br><br>

                      <div class="col-8">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Adicionar novo setor!</button>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col-3">
                  <table class="table table-bordeless table-light">
                    <thead>
                      <tr>
                        <th colspan="3">Nome</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include_once './db/setores/read.php'; ?>
                    </tbody>

                  </table>
                </div>
              </div>



            </div>
          </div>
        </div>
    </div>

  </body>
</html>
