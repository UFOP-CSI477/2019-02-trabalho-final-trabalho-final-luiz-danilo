<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM funcionarios");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $nome = $registros['nome'];
    $senha = $registros['senha'];
    $setor = $registros['id_setor'];

    echo "<tr>";
    echo
      "<td>$nome</td>
      <td>$setor</td>

      <td>
        <a href='atualizaFuncionario.php?id=$id'>
          <button >Atualizar</button>
        </a>
      </td>

      <td>
        <a href='./db/funcionarios/delete.php?id=$id'>
          <button >Apagar</button>
        </a>
      </td>

      ";

    echo "</tr>";
  }

?>
