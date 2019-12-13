<?php
  session_start();
  include_once '../conexao.php';

  $id = $_SESSION['id'];

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
  $idSetor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_NUMBER_INT);

  $queryUpdate = $link->query("UPDATE funcionarios SET nome='$nome', email='$email', senha='$senha', id_setor='$idSetor' WHERE id='$id'");
  $affected_rows = mysqli_affected_rows($link);

  if($affected_rows > 0):
    header("Location:../../cadastroFuncionarios.php");
  endif;
?>
