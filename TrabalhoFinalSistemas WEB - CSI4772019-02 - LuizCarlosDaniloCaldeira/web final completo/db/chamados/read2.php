<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM chamados WHERE id_fase = 2");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $descricao = $registros['descricao'];
    $idFase = $registros['id_fase'];

    echo "<tr>";
    echo "<td>$id<br>$descricao<br>

    <a href='atualizaChamado.php?id=$id'>
      <button>Atualizar</button>
    </a>
    <br>

    <a href='db/chamados/mover.php?id=$id&idFase=$idFase'>
      <button>Mover</button>
    </a>
    <br>

    <a href='db/chamados/delete.php?id=$id'>
      <button >Apagar</button>
    </a>

    </td>";

    echo "</tr>";
  }



?>
