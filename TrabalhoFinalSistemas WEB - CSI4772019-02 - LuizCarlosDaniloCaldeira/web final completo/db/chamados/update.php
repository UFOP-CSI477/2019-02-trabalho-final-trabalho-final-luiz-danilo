<?php
  session_start();
  include_once '../conexao.php';
  $id = $_SESSION['id'];

  $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
  $classe = filter_input(INPUT_POST, 'classe', FILTER_SANITIZE_SPECIAL_CHARS);
  $funcionario = filter_input(INPUT_POST, 'id_funcionario', FILTER_SANITIZE_NUMBER_INT);
  $responsavel = filter_input(INPUT_POST, 'id_responsavel', FILTER_SANITIZE_NUMBER_INT);

  $queryUpdate = $link->query("UPDATE chamados SET descricao='$descricao', classe='$classe', id_responsavel='$responsavel', id_funcionario='$funcionario' WHERE id='$id'");
  $affected_rows = mysqli_affected_rows($link);

  if($affected_rows > 0):
    header("Location:../../home.php");
  endif;

?>
