<?php
  session_start();

  include_once 'conexao.php';


  //VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
  $usuario_autenticado = false;

  $emailTemp = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senhaTemp = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

  // pega os dados dados passados
  $querySelect = $link->query("SELECT * FROM responsaveis WHERE email = '$emailTemp'");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $nome = $registros['name'];
    $email = $registros['email'];
    $senha = $registros['senha'];
  }

  if ($email == $emailTemp && $senha == $senhaTemp){
    $usuario_autenticado = true;
  }

  if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    header('Location: ../home.php');
  }else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: ../index.php?login=erro');
  }

?>
