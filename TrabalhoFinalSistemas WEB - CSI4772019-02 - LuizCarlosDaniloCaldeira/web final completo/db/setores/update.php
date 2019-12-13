<?php
  session_start();
  include_once '../conexao.php';
  $id = $_SESSION['id'];

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

  $queryUpdate = $link->query("UPDATE setores SET nome='$nome' WHERE id='$id'");
  $affected_rows = mysqli_affected_rows($link);

  if($affected_rows > 0):
    header("Location:../../cadastroSetores.php");
  endif;

?>
