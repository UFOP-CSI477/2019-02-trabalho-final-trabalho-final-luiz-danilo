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

    <!-- corpo do trabalho -->
    <div class="container">
      <div class="row">
        <div class="card-home">
          <div class="card">

            <div class="card-header">
              Informe seus dados!!!
            </div>

            <br>

            <div class="card-body">
              <!-- formulário de login -->
              <form action="./db/chamados/create.php" method="post">
                <!-- descrição -->
                <div class="form-group">
                  <input name="descricao" type="text" class="form-control" required placeholder="Descreva o problema requisitado: ">
                </div>

                <!-- classe do problema -->
                <div class="form-group"required>
                  <select name="classe" class="form-control">
                    <option disabled selected value="0">Informa a classe do problema: </option>
                    <option>Problemas de hardware</option>
                    <option>Problemas de software</option>
                    <option>Problemas de rede</option>
                    <option>Problemas com linha telefônica</option>
                    <option>Aquisição de hardware</option>
                    <option>Aquisição de software</option>
                  </select>
                </div>

                <!-- funcionário solicitacao -->
                <div class="form-group"required>
                  <select name="id_funcionario" class="form-control">
                    <option disabled selected value="0">Informa o funcionário requisitante: </option>
                    <?php
                      include_once './db/conexao.php';
                      $querySelect = $link->query("SELECT * FROM funcionarios");
                      while ($registros = $querySelect->fetch_assoc()){
                        $id = $registros['id'];
                        $nome = $registros['nome'];
                        echo "<option value=\"$id\">$nome</option>";
                      }
                    ?>
                  </select>
                </div>


                <!-- responsável não é pego agora -->
                <!-- a fase sempre começa com id 1 -->
                <!-- a data inicial é a data de abertura do chamado... ver como pegar automático!!! -->
                <!-- a data final será quando ele for fechado -->

                <!-- botoes -->
                <div class="row mt-5">
                  <!-- botao para logar -->
                  <div class="col-4">
                    <a href="home.php"class="btn btn-lg btn-warning btn-block">Voltar</a>
                  </div>

                  <br><br>

                  <div class="col-8">
                    <button class="btn btn-lg btn-info btn-block" type="submit">Abrir solicitação de chamado!</button>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
