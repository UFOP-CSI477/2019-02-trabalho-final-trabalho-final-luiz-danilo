<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM chamados");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $descricao = $registros['descricao'];
    $idFase = $registros['id_fase'];


    echo "<tr>";
      if($idFase == 1):
        echo "<td>$id<br>$descricao</td>";
      endif;

      if($idFase == 2):
        echo "<td>$id<br>$descricao</td>";
      endif;
    echo "</tr>";

  }



?>
