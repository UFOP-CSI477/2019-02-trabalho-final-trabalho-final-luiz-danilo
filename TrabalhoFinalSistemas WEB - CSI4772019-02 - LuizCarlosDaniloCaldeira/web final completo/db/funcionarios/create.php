<?php
  session_start();

  include_once '../conexao.php';

  // $nome = $_POST['nome'] isso não é uma boa tecnica pois é perigoso... abaixo segue um melhor
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
  $idSetor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_NUMBER_INT);

  // $nome = $_POST['nome'];
  $queryInsert = $link->query("INSERT INTO funcionarios VALUES(default, '$nome', '$email', '$senha', $idSetor)");
  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):
    // $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
    header("Location:../../cadastroFuncionarios.php");
  endif;

?>
