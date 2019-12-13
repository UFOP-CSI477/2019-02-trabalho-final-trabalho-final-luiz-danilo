<?php
  include_once './db/conexao.php';

  $querySelect = $link->query("SELECT * FROM responsaveis");

  while ($registros = $querySelect->fetch_assoc()) {
    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];


    echo "<tr>";
    echo
      "<td>$nome</td>
      <td>$email</td>

      <td>
        <a href='atualizaResponsaveis.php?id=$id'>
          <button >Atualizar</button>

        </a>
      </td>

      <td>
        <a href='./db/responsaveis/delete.php?id=$id'>
          <button >Apagar</button>

        </a>
      </td>

      ";

    echo "</tr>";
  }

?>
