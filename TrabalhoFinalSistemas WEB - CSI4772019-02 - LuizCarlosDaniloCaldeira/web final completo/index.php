<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VipDesk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

  </head>

  <body>

    <!-- barra de navegação do site -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="./imagens/logo.png" width="90" height="60" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <a class="navbar-brand" href="cadastroResponsaveis.php">
        <!-- botao para logar -->
        <button class="btn btn-lg btn-info btn-block">Cadastre-se agora!</button>
      </a>

    </nav>
    <!-- login -->
    <div class="container mt-4 d-flex justify-content-center">
      <div class="row" style="text-align:center">

        <br>
        <!-- <div class="col-8"> -->
          <!-- <br> -->
                <h3 style="text-align:center">Só com o VipDesk você tem controle de tudo que está acontecendo com a tecnologia na sua empresa!</h3>

                <!-- Aqui vai ter um carrossel -->
        <!-- </div> -->
      </div>
      <div class="row">
        <!-- <div class="col-4"> -->
          <div class="card-login">
            <div class="card">
              <!-- propaganda descritiva do site!!! -->

              <div class="card-header">
                Login
              </div>

              <div class="card-body">

                <!-- formulário de login -->
                <form action="./db/valida_login.php" method="post">
                  <!-- email -->
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="E-mail">
                  </div>
                  <!-- senha -->
                  <div class="form-group">
                    <input name="senha" type="password" class="form-control" placeholder="Senha">
                  </div>

                  <!-- informa que o usuário não está logado corretamente -->
                  <!-- <?if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                    <div class="text-danger">
                      Usuário ou senha inválido(s)
                    </div>

                  <? } ?> -->

                  <!-- informa que o usuário não pode acessar a página sem antes autenticas -->
                  <!-- <?if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                    <div class="text-danger">
                      Por favor, faça login antes de acessar as páginas protegidas
                    </div>

                  <? } ?> -->

                  <!-- botao para logar -->
                  <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

                  <br><br>

                </form>
              </div>
            </div>
        <!-- </div> -->
        </div>

    </div>

    <!-- rodapé do site -->
    <!-- <footer class="footer footer-dark bg-dark">
      <div class="footer-below">
        <div class="container">



            <div class="navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="#">
                <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
              </a>
            </div>

        </div>
      </div>
    </footer> -->

    <footer class="footer">

    </footer>


  </body>
</html>
