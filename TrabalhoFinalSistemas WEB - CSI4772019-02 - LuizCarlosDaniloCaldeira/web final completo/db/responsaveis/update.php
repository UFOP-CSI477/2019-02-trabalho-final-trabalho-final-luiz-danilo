<?php
  session_start();
  include_once '../conexao.php';
  $id = $_SESSION['id'];

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

  $queryUpdate = $link->query("UPDATE responsaveis SET nome='$nome', email='$email', senha='$senha' WHERE id='$id'");
  $affected_rows = mysqli_affected_rows($link);

  if($affected_rows > 0):
    header("Location:../../responsaveis.php");
  endif;

?>
