<?php
  session_start();
  include_once '../conexao.php';

  $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
  $classe = filter_input(INPUT_POST, 'classe', FILTER_SANITIZE_SPECIAL_CHARS);
  $funcionario = filter_input(INPUT_POST, 'id_funcionario', FILTER_SANITIZE_NUMBER_INT);

  $queryInsert = $link->query("INSERT INTO chamados VALUES(default, '$descricao', '$classe', default, 1, $funcionario, now(), default)");
  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):
    // $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
    header("Location:../../home.php");
  endif;
?>
