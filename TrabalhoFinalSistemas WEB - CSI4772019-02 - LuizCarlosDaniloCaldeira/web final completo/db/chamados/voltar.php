<?php
  include_once '../conexao.php';

  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
  $idFase = filter_input(INPUT_GET, 'idFase', FILTER_SANITIZE_NUMBER_INT);

  $idFase--;

  $queryUpdate = $link->query("UPDATE chamados SET id_fase = '$idFase' WHERE id='$id'");
  $affected_rows = mysqli_affected_rows($link);

  if($affected_rows > 0):
    header("Location:../../home.php");
  endif;

?>
