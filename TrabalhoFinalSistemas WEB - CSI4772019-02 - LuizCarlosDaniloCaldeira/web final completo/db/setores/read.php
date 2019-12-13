<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM setores");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $nome = $registros['nome'];

    echo "<tr>";
    echo
      "<td>$nome</td>

      <td>
        <a href='atualizaSetores.php?id=$id'>
          <button>Atualizar</button>
        </a>
      </td>

      <td>
        <a href='./db/setores/delete.php?id=$id'>
          <button >Apagar</button>
        </a>
      </td>

      ";

    echo "</tr>";
  }

?>
