
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
      <a class="navbar-brand" href="home.php">
        <img src="./imagens/logo.png" width="90" height="60" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

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
              <form action="./db/responsaveis/create.php" method="post">
                <!-- Nome -->
                <div class="form-group">
                  <input name="nome" type="text" class="form-control" required placeholder="Nome">
                </div>

                <!-- email -->
                <div class="form-group">
                  <input name="email" type="email" class="form-control" required placeholder="E-mail">
                </div>

                <!-- senha -->
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" required placeholder="Senha">
                </div>

                <div class="row mt-5">
                  <!-- botao para logar -->
                  <div class="col-4">
                    <a href="home.php"class="btn btn-lg btn-warning btn-block">Voltar</a>
                  </div>

                  <br><br>

                  <div class="col-8">
                    <button class="btn btn-lg btn-info btn-block" type="submit">Finalizar cadrastro!</button>
                  </div>

                </div>

              </form>
            </div>
          </div>



        </div>
    </div>

  </body>
</html>
