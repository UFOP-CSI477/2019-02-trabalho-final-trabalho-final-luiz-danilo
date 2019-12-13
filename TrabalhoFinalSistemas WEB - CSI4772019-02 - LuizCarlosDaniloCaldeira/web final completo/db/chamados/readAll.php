<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM chamados");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $descricao = $registros['descricao'];
    $idFase = $registros['id_fase'];

    echo "<tr>";
    echo "<td>$id<br>";
    echo "<td>$descricao</td>";

    if($idFase == 1):
      echo "<td>Tarefa solicitada</td>";
    elseif($idFase == 2):
      echo "<td>Em processamento</td>";
    elseif($idFase == 3):
      echo "<td>Em progresso</td>";
    elseif($idFase == 4):
      echo "<td>Em revisão</td>";
    elseif($idFase == 5):
      echo "<td>Finalizado</td>";
    else:
      echo "<td>Finalizado</td>";
    endif;
  
    echo "<td><a href='db/chamados/mover.php?id=$id&idFase=$idFase'>
    <button>Alterar status</button></a></td>";

    echo"<td><a href='db/chamados/delete.php?id=$id'>
    <button>Apagar</button></a></td>";

    echo "</tr>";

  }

?>